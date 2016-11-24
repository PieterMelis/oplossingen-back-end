<?php
try {
  if (isset($_POST[ 'submit' ] )) {
    if (isset($_POST[ 'code' ] )) {

    }
  }

} catch (Exception $e) {

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

     <form action="#" method="post">
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
