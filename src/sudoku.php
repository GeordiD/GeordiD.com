<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Sudoku Solver - GeordiD</title>

<link rel="stylesheet" href="css/master.css"/>
<link rel="stylesheet" href="css/sudoku.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/sudoku.js"></script>

</head>
<body>

<div id="slide_solver" class="bgd">
    <div style="text-align: center;">
        <div id="ss_header">
            <h1>Sudoku Solver</h1>
            <h3>C++ Project by Geordi Dosher</h3>
        </div>
    </div>

    <div style="text-align: center;">
        <div id="ss_inner_content">
            <div id="ss_puzzle_area">
                <div id="ss_puzzle_header">

                </div>
                <div id="ss_puzzle">
                    <table class="ss_table">
                        <colgroup><col><col><col>
                        <colgroup><col><col><col>
                        <colgroup><col><col><col>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="00" id="00" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="01" id="01" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="02" id="02" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="03" id="03" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="04" id="04" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="05" id="05" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="06" id="06" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="07" id="07" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="08" id="08" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="10" id="10" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="11" id="11" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="12" id="12" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="13" id="13" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="14" id="14" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="15" id="15" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="16" id="16" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="17" id="17" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="18" id="18" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="20" id="20" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="21" id="21" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="22" id="22" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="23" id="23" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="24" id="24" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="25" id="25" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="26" id="26" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="27" id="27" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="28" id="28" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tbody class="ss_table">
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="30" id="30" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="31" id="31" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="32" id="32" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="33" id="33" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="34" id="34" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="35" id="35" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="36" id="36" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="37" id="37" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="38" id="38" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="40" id="40" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="41" id="41" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="42" id="42" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="43" id="43" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="44" id="44" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="45" id="45" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="46" id="46" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="47" id="47" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="48" id="48" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="50" id="50" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="51" id="51" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="52" id="52" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="53" id="53" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="54" id="54" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="55" id="55" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="56" id="56" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="57" id="57" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="58" id="58" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tbody class="ss_table">
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="60" id="60" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="61" id="61" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="62" id="62" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="63" id="63" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="64" id="64" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="65" id="65" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="66" id="66" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="67" id="67" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="68" id="68" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="70" id="70" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="71" id="71" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="72" id="72" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="73" id="73" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="74" id="74" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="75" id="75" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="76" id="76" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="77" id="77" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="78" id="78" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="80" id="80" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="81" id="81" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="82" id="82" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="83" id="83" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="84" id="84" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="85" id="85" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="86" id="86" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="87" id="87" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                                <td>
                                    <div class="cell_div">
                                        <input class="inputcell" type="tel" tabindex="1"
                                               name="88" id="88" size="1" maxlength="1"
                                               onkeydown="handleKeyDown(this, event)"
                                               onkeyup="handleKeyUp(this, event)"
                                               onfocus="handleFocus(this)">
                                    </div>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
            <div id="ss_button_area_desktop" class="ss_button_area">
                <button class="ss_btn_solve" onclick="handleSolvePress()">Solve</button>
            </div>
            <div id="ss_button_area_mobile" class="ss_button_area">
                <button class="ss_btn_solve" onclick="handleSolvePress()">Solve</button>
            </div>
        </div>
    </div>
</div>

<div id="slide_howitworks" class="bgd">
    how it works
    <?php
    echo "hello there 3 ";
    echo exec('/execute/SudokuSolver/ssapp 009.018.');
    ?>
</div>

<div id="slide_aboutalg" class="bgd">
    about alg
</div>

</body>
</html>