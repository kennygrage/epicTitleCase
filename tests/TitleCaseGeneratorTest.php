<?php
    require_once "src/TitleCaseGenerator.php";

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

        //
    }
?>
