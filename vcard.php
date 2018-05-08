<?php
require('../../../wp-blog-header.php');
//set_time_limit(500);
$my_id = $_GET['id'];
$post_id_7 = get_post($my_id); 
//$title = $post_id_7->post_title;
$title = get_field('nombre',$my_id);

if($_GET['lang'] == 'en')
{
	$job=get_field('cargo_ing',$my_id);
}else{
	$job=get_field('cargo_esp',$my_id);
}

$string = __($title);
$token = strtok($string,",");

$x=0;
while ($token != false)
  {
	  if ($x==0){$nombre=$token;$token=strtok(",");$x=$x+1;}
	  else {$apellido=$token;$token = strtok(",");$x=$x+1;}  
  }
  
//$image_id = get_post_thumbnail_id($my_id);
//$image_url = wp_get_attachment_image_src($image_id,’large’, true);

$data = array(
            'firstname' => utf8_decode($nombre),
              'surname' => utf8_decode($apellido),
             'nickname' => utf8_decode(__($title)),
              'company' => 'Carey',
             'jobtitle' => utf8_decode($job),
           'workstreet' => 'Isidora Goyenechea 2800, piso 43, Las Condes',
             'worktown' => 'Santiago',
           'workcounty' => 'Chile',
          'workcountry' => 'Chile',
        'worktelephone' => get_field('telefono_esp',$my_id),
        	  'workfax' => get_field('fax_esp',$my_id),
            'workemail' => get_field('email_esp',$my_id),
              'workurl' => 'http://www.carey.cl',
                );

class VCF {
    var $data;
    var $name;
    function VCF($data) {
        $this->name = $data['firstname']."_".$data['surname'];
        $this->data = "BEGIN:VCARD\nVERSION:3\n
		REV:".date("Ymd\THis\Z")."\n
		PHOTO;TYPE=JPEG;ENCODING=BASE64:".$x."
		FN:".$data['firstname'].",".$data['surname']."\n
		N:".$data['surname'].";".$data['firstname']."\n
		NICKNAME:".$data['nickname']."\n
		BDAY:".$data['birthday']."\n
		ORG:".$data['company']."\n
		TITLE:".$data['jobtitle']."\n
		ADR;WORK;ENCODING=QUOTED-PRINTABLE:;;".$data['workbuilding']."=0A".$data['workstreet'].";".$data['worktown'].", ".$data['workcounty'].";"."\n
		ADR;HOME;ENCODING=QUOTED-PRINTABLE:;;".$data['homebuilding']."=0A".$data['homestreet'].";".$data['hometown'].";".$data['homecounty'].";".$data['homepostcode'].";".$data['homecountry']."\n
		TEL;WORK;VOICE:".$data['worktelephone']."\n
		TEL;HOME;VOICE:".$data['hometelephone']."\n
		TEL;WORK;FAX:".$data['workfax']."\n
		TEL;CELL;VOICE:".$data['mobile']."\n
		EMAIL;WORK;INTERNET:".$data['workemail']."\n
		EMAIL;HOME;INTERNET:".$data['homeemail']."\n
		URL;WORK:".$data['workurl']."\n
		URL;HOME:".$data['homeurl']."\n
		NOTE;ENCODING=QUOTED-PRINTABLE:".preg_replace('/[\n\r]/','=0A',$data['notes'])."\nEND:VCARD";
    }
    function save() {
        file_put_contents(trim($this->name," ").'.vcf',$this->data);
    }
	
    function show() {
        header('Content-type:text/x-vcard; charset=windows-1252');
        header('Content-Disposition: attachment; filename='.trim($this->name," ").'.vcf');
		header('Content-Length: '.strlen($this->data));
        header('Connection: close');
        echo $this->data;
    }
}

$vCard = new VCF($data);
//$vCard->save();
$vCard->show();
?>