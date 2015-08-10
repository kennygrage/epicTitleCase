<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $array_input = explode(" ", $input_title);
            $output_array = array();
            foreach ($array_input as $each_word)
            {
                $array_of_certain_words = array("the", "of", "are", "to", "a", "and");
                $matched_certain_word = false;
                $each_word = strtolower($each_word);


                foreach ($array_of_certain_words as $certain_word)
                {
                    if ($each_word == $certain_word)
                    {
                        $matched_certain_word = true;
                    }
                }





                if ($matched_certain_word)
                {
                    if ((count($output_array) == 0) || (count($output_array) == (count($array_input) - 1)))
                    {
                        array_push($output_array, ucfirst($each_word));
                    }
                    else
                    {
                        array_push($output_array, $each_word);
                    }
                }
                else
                {
                    array_push($output_array, ucfirst($each_word));
                }
            }

            return implode(" ", $output_array);

        }
    }
?>
