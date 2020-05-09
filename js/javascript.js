var slayt = document.getElementsByClassName("slayt"); 
var slaytSayısı = slayt.length;
var slaytNo = 0; 
slaytGoster(slaytNo); 

function onceki() 
{
	slaytNo--;
	slaytGoster(slaytNo);
	clearInterval(s);   
}
   
function sonraki() 
{ 
	slaytNo++;
	slaytGoster(slaytNo);
	clearInterval(s);
} 
   
var s =  setInterval(function() 
{
	slaytNo++;
	slaytGoster(slaytNo);
},2000);

function slaytGoster(slaytNumarası) 
{
	slaytNo = slaytNumarası;
	if(slaytNumarası >= slaytSayısı)
	{
		slaytNo = 0;	
	} 
		
	if(slaytNumarası < 0)
	{
		slaytNo = slaytSayısı -1;	
	}
	   
	for(i = 0; i< slaytSayısı; i++) 
	{
		slayt[i].style.display = "none";	
	} 
	slayt[slaytNo].style.display = "block";	   
}
 

function isValid(frm)
{
    var Ad = frm.Ad.value;
    var Soyad = frm.Soyad.value;
    var email = frm.Email.value;
	var mesaj = frm.Adres.value;
	var Il = frm.Il.value;
    var atpos=Email.indexOf("@");
    var dotpos=Email.lastIndexOf(".");
    if ( 	Ad==null || Ad=="" || kadi.length < 4 )
    {
        alert("Kullanıcı adı 4 karakterden az olamaz");
        return false;
    }
    if ( Soyad == null || Soyad == ""  )
    {
        alert("Şifreyi boş bırakmayın");
        return false;
    }
    
    if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
    {
        alert("Geçerli email adresi girin");
        return false;
    }      
    return true;
}

function isValid(frm)
{
    var kullanıcıadı = frm.id.value;
    var sifre1 = frm.sifre1.value;
	var email = frm.email.value;
	var sehir = frm.il.value;
	var secim = frm.cinsiyet.value;
	var text = frm.mesaj.value;

    if ( kullanıcıadı==null || kullanıcıadı=="" || kullanıcıadı.length < 4 )
    {
        alert("Kullanıcı adını 4 karakterden fazla giriniz.");
        return false;
	}
	if ( email==null || email==""   )
    {
        alert("Lütfen e-mail adresini giriniz.");
        return false;
	}
	if ( sehir==null || sehir==""   )
    {
        alert("Lütfen yaşadığınız şehri girin.");
        return false;
	}
	
    if ( sifre1 == null || sifre1 == "" || sifre2 == null || sifre2 == "")
    {
        alert("Şifreyi boş bırakmayın");
        return false;
	}
	if ( text==null || text==""   )
    {
        alert("Lütfen yollamak istediğiniz mesajı yazın.");
        return false;
	}
	
	
    
        
    return true;
}
