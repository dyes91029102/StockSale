{"filter":false,"title":"a.tpl","tooltip":"/smarty/a.tpl","undoManager":{"mark":53,"position":53,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":1}],[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":[">"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["<"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":[">"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":44,"column":7},"action":"insert","lines":["<html>","    <head>","        <title>{$title}</title>","    </head>","    <body>","        <form action='index.php' method='post' enctype=\"multipart/form-data\">","            <input type='hidden' name='func' value='do_update_page'>","            <input type='submit' value='修改'><br>","            <input type='hidden' name='stu_id' value={$update_id}>","            <input type='file' name='upload_file'>","            <table>","                <tr>","                    <td>ID</td>","                    <td>{$update_id}</td>","                </tr>","                <tr>","                    <td>Name</td>","                    <td><input type='text' name='new_name'>","                    </td>","                </tr>","                <tr>","                    <td>Birth</td>","                    <td>","                        <select name='new_birth_year'>","                            {for $foo=1900 to 2016}","                                <option value={$foo}>{$foo}</option> ","                            {/for}","                        </select>","                        <select name='new_birth_month'>","                            {for $foo=1 to 12}","                                <option value={$foo}>{$foo}</option> ","                            {/for}","                        </select>","                        <select name='new_birth_day'>","                            {for $foo=1 to 31}","                                <option value={$foo}>{$foo}</option> ","                            {/for}              ","                        </select>","                    </td>","                </tr>","            </table>                       ","        </form>","        <img src='{$file_path}' height=400 width=400 >                ","    </body>","</html>"],"id":5}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":31},"action":"remove","lines":["<title>{$title}</title>"],"id":6}],[{"start":{"row":5,"column":8},"end":{"row":43,"column":11},"action":"remove","lines":["<form action='index.php' method='post' enctype=\"multipart/form-data\">","            <input type='hidden' name='func' value='do_update_page'>","            <input type='submit' value='修改'><br>","            <input type='hidden' name='stu_id' value={$update_id}>","            <input type='file' name='upload_file'>","            <table>","                <tr>","                    <td>ID</td>","                    <td>{$update_id}</td>","                </tr>","                <tr>","                    <td>Name</td>","                    <td><input type='text' name='new_name'>","                    </td>","                </tr>","                <tr>","                    <td>Birth</td>","                    <td>","                        <select name='new_birth_year'>","                            {for $foo=1900 to 2016}","                                <option value={$foo}>{$foo}</option> ","                            {/for}","                        </select>","                        <select name='new_birth_month'>","                            {for $foo=1 to 12}","                                <option value={$foo}>{$foo}</option> ","                            {/for}","                        </select>","                        <select name='new_birth_day'>","                            {for $foo=1 to 31}","                                <option value={$foo}>{$foo}</option> ","                            {/for}              ","                        </select>","                    </td>","                </tr>","            </table>                       ","        </form>","        <img src='{$file_path}' height=400 width=400 >                ","    </body>"],"id":7}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":8},"action":"remove","lines":["    "],"id":9}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "],"id":10}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "],"id":11}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["<"],"id":12}],[{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"insert","lines":["/"],"id":13}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["b"],"id":14}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"remove","lines":["b"],"id":15},{"start":{"row":5,"column":6},"end":{"row":5,"column":10},"action":"insert","lines":["body"]}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["?"],"id":16}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"remove","lines":["?"],"id":17}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":[">"],"id":18}],[{"start":{"row":4,"column":10},"end":{"row":5,"column":8},"action":"insert","lines":["","        "],"id":19}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["e"],"id":20}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["c"],"id":21}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["c"],"id":22}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"remove","lines":["e"],"id":23}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["{"],"id":24}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["}"],"id":25}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["!"],"id":26}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["!"],"id":27}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["!"],"id":28}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["!"],"id":29}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["$"],"id":31}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["t"],"id":32}],[{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["e"],"id":33}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["s"],"id":34}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["t"],"id":35}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":15},"action":"remove","lines":["{$test}"],"id":36},{"start":{"row":5,"column":8},"end":{"row":13,"column":24},"action":"insert","lines":["<table>","                    {foreach from=$myArray item=i}","                        <tr>","                        {foreach from=$i item=j}","                            <td>{$j}</td>","                        {/foreach}","                        </tr>","                    {/foreach}","                </table>"]}],[{"start":{"row":6,"column":8},"end":{"row":6,"column":20},"action":"remove","lines":["            "],"id":37}],[{"start":{"row":6,"column":8},"end":{"row":6,"column":12},"action":"insert","lines":["    "],"id":38}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":24},"action":"remove","lines":["        "],"id":39}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":24},"action":"remove","lines":["    "],"id":40}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":41},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "],"id":42},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":43},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":7},"end":{"row":13,"column":12},"action":"remove","lines":["     "],"id":44}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":16},"action":"remove","lines":["     "],"id":45}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":[" "],"id":46}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":20},"action":"remove","lines":["     "],"id":47}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":[" "],"id":48}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":34},"action":"remove","lines":["$myArray"],"id":50},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["a"]}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["a"],"id":51}],[{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["$"],"id":52}],[{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["a"],"id":53}],[{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["r"],"id":54}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["r"],"id":55}],[{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"insert","lines":["a"],"id":56}],[{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"insert","lines":["y"],"id":57}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":32},"end":{"row":6,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1464515733458,"hash":"aaffc55c6c9a9aa9f0ebc4acb8c51bfa14d8c585"}