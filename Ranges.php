<?php
class Ranges {
    public static function addUsed($before, $id) {
        $out = [];
        $append = function($new) use(&$out) {
            if(count($out)) {
                $l = count($out) - 1;
                $last = $out[$l];
                if($new[0] - $last[1] < 2) { $out[$l][1] = $new[1]; }
                else { $out[] = $new; }
            } else { $out[] = $new; }
        };
        if(count($before)) {
            foreach($before as $i) {
                if($i[1] + 1 == $id) {
                    $append([$i[0], $id]);
                } else if($i[0] - 1 == $id) {
                    $append([$id, $i[1]]);
                } else if($i[0] > $id) {
                    $append([$id, $id]);
                    $append($i);
                } else {
                    $append($i);
                }
            }
            if($id > $i[1] + 1) {
                $out[]  = [$id, $id];
            }
        } else {
            $out[] = [$id, $id];
        }
        return $out;
    }
}