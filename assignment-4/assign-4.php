<?php
  include 'form.php';
    $paragraph = filter_input(INPUT_POST, 'paragraph');
?>


      <?php

    // 1.
    $characters = strlen($paragraph);

    // 2.Delete everything except letters from $paragraph
    $onlyLetters = preg_replace("([^A-Za-z])", "", $paragraph);
    // count onlyLetters
    $numLetters = strlen($onlyLetters);

    // 3. Consonants
    $numConsonants = 0;
    // 3.1 Remove vowels from letters-only string '$onlyLetters'
    $vowelRemove =preg_replace("([a,e,i,o,u,A,E,I,O,U])", "", $onlyLetters);
    // 3.2 count what is left
    $numConsonants = strlen($vowelRemove);


    // 4. digits
    $temp1 = $paragraph;
    $digitRemove =preg_replace("([0-9])", "", $temp1);
    $digits = $characters -strlen($digitRemove);
    // 5. spaces
    $spaces = substr_count($paragraph, ' ');


    // 6. word characters and 7.punctuation



    // 6.2 new string with only word characters
    $wordCharOnly2 = preg_replace('([^@#$%&+-=<>*/])','',$paragraph);
    $wordCharOnly3 = preg_replace('(,)','',$wordCharOnly2);

    $wordCharOnly = preg_replace('([0-9])','',$wordCharOnly3);


    // 6.2 count word characters
    $numWordChar = strlen($wordCharOnly);

    // 6.2 new string with only punctuation

    // 6.2 count word characters
    $numPunctChar=0;
    $numPunctChar = $characters - ($numLetters + $digits + $spaces + $numWordChar);

    // 8.
    $words = str_word_count($paragraph);



      echo '<h4>total characters:   ' .   $characters;
      echo '<h4>2. letters:   ' .   $numLetters . "   only Letters<br /> " . $onlyLetters;
      echo '<h4>3. paragraph consonants:   ' .   $numConsonants;
      echo '<h4>4. digits:   ' .   $digits;
      echo '<h4>5. spaces: ' .   $spaces;
      echo '<h4>6. word characters:' . $numWordChar . 'word chars only <br /> ' .   $wordCharOnly;
      echo '<h4>7. punctuation:   ' .   $numPunctChar;

      echo '<h4>8.words:   ' .   $words;

    ?>

    </body>
</html>
