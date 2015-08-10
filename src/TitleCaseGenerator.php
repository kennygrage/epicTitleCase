<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $array_input = explode(" ", $input_title);
            $output_array = array();
            foreach ($array_input as $each_word)
                {
                    array_push($output_array, ucfirst($each_word));
                }

            return implode(" ", $output_array);

            //return ucfirst($input_title);
        }
    }
?>
