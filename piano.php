<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>TheOctaves</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="column volume-slider">
            <div class="border border-dark rounded">
                <button class="btn btn-sm btn-dark"  type="button" id="decrement">-</button>
                <span  class="pl-3 text-info" id="number">C0</span>
                <button class="btn btn-sm btn-dark" type="button" id="increment">+</button>
            </div>
            <div class="pl-5"><span>Volume</span><input type="range" min="0" max="1" value="0.5" step="any"></div>
        </div>
        <div class="column keys-checkbox">
            <span>Show Keys</span><input type="checkbox" checked>
        </div>
    </header>
    <ul class="piano-keys">
        <li class="key white" data-key="a" data-toggle="tooltip" data-placement="top" title="C"><span>a</span></li>
        <li class="key black" data-key="w"data-toggle="tooltip" data-placement="top" title="C#"><span>w</span></li>
        <li class="key white" data-key="s"data-toggle="tooltip" data-placement="top" title="D"><span>s</span></li>
        <li class="key black" data-key="e"data-toggle="tooltip" data-placement="top" title="D#"><span>e</span></li>
        <li class="key white" data-key="d"data-toggle="tooltip" data-placement="top" title="E"><span>d</span></li>
        <li class="key white" data-key="f"data-toggle="tooltip" data-placement="top" title="F"><span>f</span></li>
        <li class="key black" data-key="t"data-toggle="tooltip" data-placement="top" title="F#"><span>t</span></li>
        <li class="key white" data-key="g"data-toggle="tooltip" data-placement="top" title="G"><span>g</span></li>
        <li class="key black" data-key="y"data-toggle="tooltip" data-placement="top" title="G#"><span>y</span></li>
        <li class="key white" data-key="h"data-toggle="tooltip" data-placement="top" title="A"><span>h</span></li>
        <li class="key black" data-key="u"data-toggle="tooltip" data-placement="top" title="A#"><span>u</span></li>
        <li class="key white" data-key="j"data-toggle="tooltip" data-placement="top" title="B"><span>j</span></li>
        <li class="key white" data-key="k"data-toggle="tooltip" data-placement="top" title="C"><span>k</span></li>
        <li class="key black" data-key="o"data-toggle="tooltip" data-placement="top" title="C#"><span>o</span></li>
        <li class="key white" data-key="l"data-toggle="tooltip" data-placement="top" title="D"><span>l</span></li>
        <li class="key black" data-key="p"data-toggle="tooltip" data-placement="top" title="D#"><span>p</span></li>
        <li class="key white" data-key=";"data-toggle="tooltip" data-placement="top" title="E"><span>;</span></li>
    </ul>
</div>

</body>
<script src="js/piano.js"></script>
</html>