<?php
function laluLintas($lampuMerah = '')
{
   switch ($lampuMerah) {
      case 'hijau':
         return "Jalan";
         break;
      case 'kuning':
         return "Siap2";
         break;
      case 'merah':
         return "Berhenti";
         break;

      default:
         return "Ngegas";
         break;
   }
}


echo laluLintas('pink');
echo "<br>";
echo laluLintas('merah');
echo "<br>";
echo laluLintas('kuning');
echo "<br>";
echo laluLintas('hijau');
echo "<br>";
echo laluLintas();
echo "<br>";
