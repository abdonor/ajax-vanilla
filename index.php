<?php
/**
 * Created by PhpStorm.
 * User: abdonor
 * Date: 19/08/2016
 * Time: 13:12
 */

echo "<h1>Test Vanilla Ajax</h1>";
?>

<div>
    <a data-action="my-ajax-action" data-user="123">click me to fire request</a>
</div>

<script>


    function test(dataUser, el) {

        if (dataUser < 0) {
            alert('Wrong data');
            return;
        }
        var req = new XMLHttpRequest();
        req.open('POST', 'ajax.php', true);
        req.onload = function () {
            if (req.readyState == 4) {
                if (req.status == 200) {
                    el.innerHTML = "For User: "+dataUser+", the return is: " + req.responseText;
                }
            }
        };
        req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        req.send( "data="+dataUser );
    }

    var sel = document.querySelectorAll('[data-action]');
    el = sel[0];
    el.addEventListener('click', function(){
        var dataUser = el.getAttribute('data-user');
        test(dataUser, el);

    });
</script>