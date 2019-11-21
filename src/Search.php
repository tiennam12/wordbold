<?php

namespace Nam\Boldword;

final class Search
{
    public function searchWord($paragraph, $word) {
        $paragraph = preg_split("/\s/", $paragraph);
        $word = preg_split("/\s/", $word);
        $equal1 = array_intersect($paragraph, $word);
        $equal2 = array_intersect($paragraph, $word);
        foreach($equal1 as &$temp) {
            $temp = "<strong>$temp</strong>";
        }

        return implode(" ", str_replace($equal2, $equal1, $paragraph));
    }
}
