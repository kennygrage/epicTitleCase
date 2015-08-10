<?php
    require_once __DIR__."/../src/TitleCaseGenerator.php";
    //require_once __DIR__."/../vendor/bin/phpunit";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        //Capitalize one letter
        function test_makeTitleCase_oneLetter()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("A", $result);

        }

        //Make title case with one word
        function test_makeTitleCase_oneWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

        //Make title case with whole sentance
        function test_makeTitleCase_sentance()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "star wars";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Star Wars", $result);
        }

        //Deal with mixed case - make title case with whole sentance
        function test_makeTitleCase_mixedCaseSentance()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "stAr wARs";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Star Wars", $result);
        }

        //Exlude certain words
        function test_makeTitleCase_excludeCertainWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "return of the jedi";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Return of the Jedi", $result);
        }

        //First letter is always capitalized
        function test_makeTitleCase_firstLetterFirstWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a place called home";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("A Place Called Home", $result);
        }

        //Last letter is always capitalized
        function test_makeTitleCase_firstLetterLastWord()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "where the wild things are";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Where the Wild Things Are", $result);
        }
    }
?>
