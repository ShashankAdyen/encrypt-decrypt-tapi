<?php>

	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	date_default_timezone_set('UTC');

	$passPhrase="AptosAdyenDev1";
	$keyIdentifier="AdyenDev1";
	$salt="AdyenNexoV1Salt",
	
	$apiKey = "AQEuhmfxKovIaxdBw0m/n3Q5qf3VaZtZAoBrW2ZZ03a/+hmO1VZ6+ARkXKHKgjaxGxDBXVsNvuR83LVYjEgiTGAH-GQBnOBJEwOl9oAUToJm2dGuUeqNwKcocoObSkGlM0UE=-6Va4fjX35DAmJJzx";
	$cloudURL = "https://terminal-api-test.adyen.com/sync";
	
	$localIP = 'https://192.168.14.119:8443/nexo/';	
	
	
	$TransactionID = "TID-" . date("Y-m-d-H:i:s");  
	
	$length = 5;
	$randomString = substr(str_shuffle(md5(time())),0,$length);
	
	$MessageCategory= "Payment";
	$ServiceID = date("dm").$randomString;  
	$SaleID = "Spatel_TAPI";

	$POIID= "V400m-324688940";//"V400m-324687828";
	$TimeStamp = date("Y-m-d\TH:i:s");


	$paymentAmount = 10;   
	$currencyCode = "USD";
	
	$TransactionConditions = "";
	$SaleToAcquirerData = "";

	
?>
<form action="./handler.php" method="post" >

	
	<input type="submit" name="submit" value="Create payment" />
	<br/>
	<br/><br/>
	


	<br/>
	<label>PassPhrase</label>
	<input type="text" name="passPhrase" value="<?= $passPhrase ?>"/>
	<br/>
	
	<br/>
	<label>KeyIdentifier</label>
	<input type="text" name="keyIdentifier" value="<?= $keyIdentifier ?>"/>
	<br/>
	
	<br/>
	<label>Salt</label>
	<input type="text" name="salt" value="<?= $salt ?>"/>
	<br/>
	
	<br/>
	<label>CloudAPI</label>
	<input type="radio" name="CloudAPI" value ="y">
	<label>LocalIP</label>
	<input type="radio" name="CloudAPI" value ="n">
	<br/>
	<label>*LocalIP</label>
	<input type="text" name="localIP" value="<?= $localIP ?>"/><br/>
	<div style=" font-size:  12;padding-left:  16px;">
	Encrypted:
		<label>Yes</label>
		<input type="radio" name="ENC" value ="y">
		<label>No</label>
		<input type="radio" name="ENC" value ="n">
	</div>	

	<label>*CloudURL</label>
	<input type="text" name="cloudURL" value="<?= $cloudURL ?>"/><br/>
	<div style=" font-size:  12;padding-left:  16px;">
		<label>API Key</label>
		<input type="text" name="apiKey" value = "<?= $apiKey ?>"/><br/>
	</div>

	<br/>
	<label>TransactionID</label>
	<input type="text" name="TransactionID" value="<?= $TransactionID ?>"/><br/>
	<label>MessageCategory</label>
	<input type="text" name="MessageCategory" value="<?= $MessageCategory ?>"/><br/>
	<label>ServiceID</label>
	<input type="text" name="ServiceID" value="<?= $ServiceID ?>"/><br/>
	<label>SaleID</label>
	<input type="text" name="SaleID" value="<?= $SaleID ?>"/><br/>
	<label>POIID</label>
	<input type="text" name="POIID" value="<?= $POIID ?>"/><br/>
	<label>TimeStamp</label>
	<input type="text" name="TimeStamp" value="<?= $TimeStamp ?>"/><br/>
	<br/>


	<label>*paymentAmount</label>
	<input type="text" name="paymentAmount" value="<?= $paymentAmount ?>"/><br/>
	<label>*currencyCode</label>
	<input type="text" name="currencyCode" value="<?= $currencyCode ?>"/><br/>
	
	<br/>
	<label>TransactionConditions</label>
	<input type="text" name="TransactionConditions" value="<?= $TransactionConditions ?>"/><br/>
	<br/>
	<div style=" font-size:  10;padding-left:  16px;">
	options:<br/>
	"ForceEntryMode": ["Keyed"]
	</div>
	<br/>

	<label>SaleToAcquirerData</label>
	<input type="text" name="SaleToAcquirerData" value="<?= $SaleToAcquirerData ?>"/>
	<br/>
	<div style=" font-size:  10;padding-left:  16px;">
	options:(separate by &)<br/>
	tenderOption=BypassPin<br/>
    tenderOption=AllowPartialAuthorisation<br/>
	tenderOption=AskGratuity<br/>
	tenderOption=ForcedDecline<br/>
	tenderOption=ReceiptHandler<br/>
	shopperEmail=hola@gmail.com<br/>
	shopperReference=fakeRef<br/>
	recurringContract=RECURRING
	</div>
	<br/>
	
	<br/>
	<!--
	<label>shopperReference</label>
	<input type="text" name="shopperReference" value="<?= $shopperReference ?>"/><br/>
	<label>recurringContract</label>
	<input type="text" name="recurringContract" value="<?= $recurringContract ?>"/><br/>
	-->

</form>
</html>
