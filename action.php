<?php
/**
 * Created by PhpStorm.
 * User: pk-pk
 * Date: 23.08.2017
 * Time: 19:04
 */

require_once('vendor/autoload.php');
//use nwtn\Respimg as Respimg;


//ini_set('error_reporting', E_ALL);
//ini_set("display_errors", 1);

$date = date("d-m-Y");
$artdata = $_POST['arts'];
$imgpath = 'html/'.$date.'/images';

if (!file_exists($imgpath)) {
	mkdir($imgpath, 0777, true);
}

$files = ['img-blank.gif','logo.png','logo-footer.png','bg-header.jpg'];
foreach($files as $resFile){
	copy('assets/'.$resFile, $imgpath.'/'.$resFile);
}

ob_start();
include ('template_header.php');

$i = 1;
foreach ($artdata as $article){
	$link = $article["'link'"];
	$text = $article["'text'"];
	$subtitle = $article["'subtitle'"];

	if(!empty($link) && !empty($text)){
		$image = parse_data($link, 'image');
		$title = parse_data($link, 'title');
		save_image($image, $i, $imgpath);
		include ('template_block.php');
		$i++;
	};

}

include ('template_footer.php');
$template_html = ob_get_contents();
ob_end_clean();

//do your stuff
file_put_contents('html/'.$date.'/index.html', $template_html);
echo $template_html;

//print_r($_POST);

function parse_data($url, $obj = 'image'){
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, '1');
	$text = curl_exec($ch);
	curl_close($ch);

	$dom = new DOMDocument;
	$dom->loadHTML($text);

	$xpath = new DOMXPath($dom);

	if ($obj == 'image'){

		$articles = $xpath->query('//div[@class="photo-frame"]');

		foreach($articles as $container) {
			$arr = $container->getElementsByTagName("img");
			foreach($arr as $item) {
				return $item->getAttribute('src');
			}
		}
	}else{

		$articles = $xpath->query('//div[@class="post"]');

		foreach($articles as $container) {
			$arr = $container->getElementsByTagName("h1");
			foreach($arr as $item) {
				return $item->textContent;
			}
		}
	}

}

function save_image($url, $filename, $imgpath)
{

	$img = file_get_contents($url);
	file_put_contents($imgpath.'/img-0'.$filename.'.jpg', $img);

	resize_crop_image(385, 250, $imgpath.'/img-0'.$filename.'.jpg', $imgpath.'/img-0'.$filename.'.jpg');
}

//resize and crop image by center
function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $quality = 80){
	$imgsize = getimagesize($source_file);
	$width = $imgsize[0];
	$height = $imgsize[1];
	$mime = $imgsize['mime'];

	switch($mime){
		case 'image/gif':
			$image_create = "imagecreatefromgif";
			$image = "imagegif";
			break;

		case 'image/png':
			$image_create = "imagecreatefrompng";
			$image = "imagepng";
			$quality = 7;
			break;

		case 'image/jpeg':
			$image_create = "imagecreatefromjpeg";
			$image = "imagejpeg";
			$quality = 80;
			break;

		default:
			return false;
			break;
	}

	$dst_img = imagecreatetruecolor($max_width, $max_height);
	$src_img = $image_create($source_file);

	$width_new = $height * $max_width / $max_height;
	$height_new = $width * $max_height / $max_width;
	//if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
	if($width_new > $width){
		//cut point by height
		$h_point = (($height - $height_new) / 2);
		//copy image
		imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
	}else{
		//cut point by width
		$w_point = (($width - $width_new) / 2);
		imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
	}

	$image($dst_img, $dst_dir, $quality);

	if($dst_img)imagedestroy($dst_img);
	if($src_img)imagedestroy($src_img);
}





//echo parse_data('http://medportal.ru/mednovosti/news/2017/08/23/843trials/','image');