<?php

		$message = "";

try {
  if (isset($_POST[ 'submit' ] )) {
    if (isset($_POST[ 'code' ] )) {
      throw new Exception( 'SUBMIT-ERROR' );
    }	else
				{
					$naam	=	$_POST['text'];
				}
  }

} catch (Exception $e) 	{
	$messageCode = $e->getMessage();
		$message = "";
        $createMessage = false;

        switch($messageCode){
            case 'SUBMIT-ERROR':
                $message["type"] = "error";
                break;
        }
	}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Geef uw kortingscode op</h1>

     <?php if ( $message ): ?>
     <div>
       <?= $message ?>
     </div>
   <?php endif ?>


     <form method="post">
         <ul>
             <li>
                 <label for="code">Kortingscode</label>
                 <input type="text" id="code" name="code">
             </li>
         </ul>
         <input type="submit">
     </form>
   </body>
 </html>
