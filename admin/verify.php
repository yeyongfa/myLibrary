<?php
session_start();
srand((double)microtime()*1000000); 
while(($authnum=rand()%10000)<1000);//������λ���������֤�� 
$_SESSION['auth']=$authnum;

//������֤��ͼƬ 
Header("Content-type: image/PNG");
$im = imagecreate(80,34); 


$gray = ImageColorAllocate($im, 250,250,250); 
$black = ImageColorAllocate($im, 120,120,50);
$white = ImageColorAllocate($im, 200,200,100); 
$black = ImageColorAllocate($im, 120,120,50); 
$red = ImageColorAllocate($im, 255,0,0); 


imagefill($im,600,200,$gray); 

//����λ������֤�����ͼƬ 
//λ�ý���
for ($i = 0; $i < strlen($authnum); $i++)
{
	$i%2 == 0?$top = -1:$top = 3;
	imagestring($im, 6, 13*$i+13, 8, substr($authnum,$i,1), $white); 
}

for($i=0;$i<100;$i++)   //����������� 
{ 
	imagesetpixel($im, rand()%70 , rand()%30 , $black); 
} 

ImagePNG($im); 
ImageDestroy($im);
?>
