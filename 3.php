<?php
function getContent ()
{
    $b="<p><html></p><p><head></p><p>&nbsp; &nbsp;<title>{{TITLE}}</title></p><p></head></p><p><body></p>
    <p><p>&nbsp; &nbsp;{{CONTENT}}</p><p></body></p><p></html></p>";
    return $b;
}
function replaceTitle ()
{
    $c =array ("{{TITLE}}" => "LA KUKARACHA");
    return strtr (getContent(),$c);
}
function replaceContent ()
{
    $a = array("{{CONTENT}}" => "PATRIO MUERTE");
    return strtr(getContent(), $a);
}
//echo replaceTitle (), replaceContent (); // Закомментил чтобы не мешались несколько выводов функций. Они рабочие.
function getReplace ($n, $z)
{
    if (($n=='title' and $z!=null) or ($n=='content' and $z!=null))
    return $z;
    else return null;
}
echo getReplace ('title', 'ggggg')
    ?>