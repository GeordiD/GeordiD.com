/**
 * Created by Geordi on 1/19/2016.
 */

function handleSolvePress() {
    var output = "";

    $('.inputcell').each(function(i, obj) {
        if(obj.value) {
            output += obj.name + obj.value + ".";
        }
    });

    console.log(output);
}

function handleKeyUp(obj, keystroke) {
    var keycode = keystroke.keyCode;

    if((keycode >= 49 && keycode <=57) ||
        (keycode >= 96 && keycode <=105)) {
        moveOn(obj);
    } else if(keycode == 48 || keycode == 96) {
        obj.value = "";
        moveOn(obj);
    } else if (keycode >= 37 && keycode <= 40) {
        //Arrow keys
        handleFocus(obj);
    } else {
        obj.value = "";
    }
}

function moveOn(obj) {
    var name = parseInt(obj.name);
    var col = name % 10;

    if(col >= 0 && col <= 7) {
        var id;
        if(name < 9) {
            id = "0" + (++name).toString()
        } else {
            id = (++name).toString();
        }

        document.getElementById(id).focus();
    } else if(name == 88) {
        document.getElementById("00").focus();
    } else if(col == 8) {
        document.getElementById((name + 2).toString()).focus();
    }
}

function moveBack(obj) {
    var name = parseInt(obj.name);
    var col = name % 10;

    if(col >= 1 && col <= 8) {
        var id;
        if(name < 9) {
            id = "0" + (--name).toString()
        } else {
            id = (--name).toString();
        }

        document.getElementById(id).focus();
    } else if(name == 0) {
        document.getElementById("88").focus();
    } else if(col == 0) {
        var id;
        if(name - 2 < 9) {
            id = "0" + (name - 2).toString();
        } else {
            id = (name - 2).toString();
        }
        document.getElementById(id).focus();
    }
}

function moveUp(obj) {
    var name = parseInt(obj.name);
    var target = name - 10;
    var id;

    if(target < 0) {
        id = (target + 90).toString();
    } else if(target < 10) {
        id = "0" + target.toString();
    } else {
        id = target.toString();
    }

    document.getElementById(id).focus();
}

function moveDown(obj) {
    var name = parseInt(obj.name);
    var target = name + 10;
    var id;

    if(target > 98) {
        id = (target - 90).toString();
    } else if(target > 88) {
        id = "0" + (target - 90).toString();
    } else {
        id = target.toString();
    }

    document.getElementById(id).focus();
}

function handleKeyDown(obj, keystroke) {
    var keycode = keystroke.keyCode;

    switch(keycode) {
        //delete or backspace
        case 8:
        case 46:
            break;

        //left arrow
        case 37:
            moveBack(obj);
            break;

        //up arrow
        case 38:
            moveUp(obj);
            break;

        //right arrow
        case 39:
            moveOn(obj);
            break;

        //down arrow
        case 40:
            moveDown(obj);
            break;
    }
}

function handleFocus(obj) {
    if(obj.value.length > 0) {
        obj.setSelectionRange(0, obj.value.length);
    }
}