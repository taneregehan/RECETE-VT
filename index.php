<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

  <body >
   
    <h1>REÇETE</h1>
	<table>
        <tr>
            <td>Adı, soyadı</td>
            <td>Tarih</td>
        </tr>
        <tr>
            <td><input type="text"></td>
            <td><input type="date"></td>
        </tr>
        <tr>
            <td>Kimlik numarası</td>
            <td rowspan="6"></td>
        </tr>
        <tr>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Protokol numarası</td>
        </tr>
        <tr>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Tanı</td>
        </tr>
        <tr>
            <td><input type="text"></td>
        </tr>
        <tr>
            <th colspan="2">İlaçlar</th>
        </tr>
        <tr>
            <td colspan="2"><input type="text" class="taner" name="ID" id="ID" placeholder="İLAÇ GİRİN">
			<div id="ILAC_ADI"></div> </td>
        </tr>
    </table>
          
    
  </body>
  <p><button onclick="javascript:window.print()" class="print-button">Yazdır</button></p>
</html>

<script type="text/javascript">
  $(document).ready(function(){
      $("#ID").on("keyup", function(){
        var ID = $(this).val();
        if (ID !=="") {
          $.ajax({
            url:"action.php",
            type:"POST",
            cache:false,
            data:{ID:ID},
            success:function(data){
              $("#ILAC_ADI").html(data);
              $("#ILAC_ADI").fadeIn();
            }  
          });
        }else{
          $("#ILAC_ADI").html("");  
          $("#ILAC_ADI").fadeOut();
        }
      });

      // click one particular city name it's fill in textbox
      $(document).on("click","li", function(){
        $('#ID').val($(this).text());
        $('#ILAC_ADI').fadeOut("fast");
      });
  });
</script>