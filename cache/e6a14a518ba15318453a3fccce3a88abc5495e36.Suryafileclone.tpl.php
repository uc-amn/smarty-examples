<?php
/* Smarty version 4.3.0, created on 2023-02-03 08:41:27
  from 'C:\xampp\htdocs\smarty\Learning\template\Suryafileclone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63dcbaa73d8246_89723002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d16214ba607c17b0793097e94a1b61bbdfc5c04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Learning\\template\\Suryafileclone.tpl',
      1 => 1675410084,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_63dcbaa73d8246_89723002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mybooks' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\Learning\\templates_c\\1d16214ba607c17b0793097e94a1b61bbdfc5c04_0.file.Suryafileclone.tpl.cache.php',
    'uid' => '1d16214ba607c17b0793097e94a1b61bbdfc5c04',
    'call_name' => 'smarty_template_function_mybooks_10180666463dcbaa68cf4f7_73135854',
  ),
));
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty Learning</title>
</head>

<body>

    
        <div class="info">
        <li>User_Name: Deeksha Kulshreshtha</li>
        <li>Email Id: deeksha.kulshreshtha@ucertify.com</li>
        <li>Mobile Numbers: 4234729374, 8409234809</li>
    </div>


        </br>
    <h2>Accessing the data of array in one go</h2></br>
    <div class="info">{"name":"Deeksha Kulshreshtha","email id":"deeksha.kulshreshtha@ucertify.com","mobile number":{"mn1":"4234729374","mn2":"8409234809"}}</div>


        </br>
    <h2>Accessing Array using indexing</h2></br>

    <div class="info">
        <li>User Name: deekshakulshreshtha</li>
        <li>Email Id: deeksha.kulshreshtha@ucertify.com</li>
        <li>Phone Number 1: 489238302</li>
        <li>Phone Number 2: 743208432</li>
    </div>

    

    
    
    <h2>Functions in Smarty</h2>
        <div class="info">
        <p>Substring</p>

        
                Deeksha <br>

        <h2>String length</h2>
                 7 <br>

    </div>

    <h2>Counter Variable</h2>

    
    <div class="info">
        10</br>
        30 </br>
        50 </br>
        70 </br>
        90 </br>
    </div>

    <h2>We are now playing with funcitons</h2>

        

    
        <ul class="info">
            <li>gelvin silbersctaz</li>
            <li>Geeta</li>
            <li>Atomic Habits</li>
        </ul>
    

        <div class="info">
        <button onclick="p()">click me</button>
    </div>

    <h2>Variable Modifier</h2>
    <div class="info">
        <h3>Capitalization</h3>
        gelvin silbersctaz</br>
        Gelvin Silbersctaz</br>
        Gelvin Silbersctaz</br>
    </div>

    <h2>Lower Case</h2>
    <div class="info">
        gelvin silbersctaz</br>
        gelvin silbersctaz
    </div>

    <h2>Printing the current time</h2>
    <div class="info">
        2023-02-03 08:41:27
    </div>

    <h2>UPPER</h2>
    <div class="info">
        gelvin silbersctaz</br>
        GELVIN SILBERSCTAZ
    </div>

    <h3>Printing the current time</h3>
    <div class="info">
        2023-02-03 08:41:27
    </div>

    <h2>String Concatination</h2>
    <div class="info">
        gelvin silbersctaz is my favourite book for operating system
    </div>

    <h3>Printing the current time</h3>
    <div class="info">
        2023-02-03 08:41:27
    </div>

    <h3>Count Chatacters</h3>
    <div class="info">
        gelvin silbersctaz</br>
        17</br>
        18</br>
    </div>

    <h3>Count Words</h3>
    <div class="info">
        gelvin silbersctaz</br>
        2</br>
        2</br>
    </div>

    <h3>Count Chatacters</h3>
    <div class="info">
        10</br>
        10</br>
    </div>

    <h3>Count Paragraph</h3>
    Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning 
                automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to.
    5</br>
    5</br>

    <h3>Count Sentences</h3>
    Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning 
                automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to.
    5</br>
    5</br>

    <h3>Count Paragraph</h3>
    Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning 
                automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to.
    5</br>
    5</br>

    Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning 
                automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to.</br>
    <p>Employee Id:  </p>

    <h3>Replace</h3>
    Hello Im Deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning 
                automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to.

    <h3>Escape</h3>
        <a herf="mailto: deeksha.kulshreshtha@ucertify.com"> deeksha [DOT] kulshreshtha [AT] ucertify [DOT] com</a>

    <h3>Spacify</h3>
    gelvin silbersctaz</br>
    g e l v i n   s i l b e r s c t a z</br>
    g$$e$$l$$v$$i$$n$$ $$s$$i$$l$$b$$e$$r$$s$$c$$t$$a$$z</br>

    
        <h3>Truncate</h3>
    Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code....</br>

    <h3>Combining Modifiers</h3>
    5</br>

    <h3>Word Wrap</h3>
    Hello Im deeksha kulshreshtha. I am application programmer and I 
                love to code. 
                I believe in when your passion become your profession then your chances of learning<br/>automatically become 100x from usual cases. 
                I love to code. Coding is my passion and profession to. 
    <h1 style="Text-align:Center;">Built In Function</h1>
    <div class="info">
        <h3>Appending the element to the array</h3>
                <p>Array1 has been updated</p>
        {"name":"Deeksha Kulshreshtha","email id":"deeksha.kulshreshtha@ucertify.com","mobile number":{"mn1":"4234729374","mn2":"8409234809"},"address":"meerut"}</br>

        <h3>Data has been replaced with the new value</h3>
                {"name":"Deeksha Kulshreshtha","email id":"deeksha.kulshreshtha@ucertify.com","mobile number":{"mn1":"4234729374","mn2":"8409234809"},"address":"Noida"}

         

                <table>
            <tr>
                <th>Name</th>
                <th>Department</th>
            </tr>
                            <tr>
                    <td>Deeksha</td>
                    <td>CS</td>
                </tr>
                            <tr>
                    <td>Manya</td>
                    <td>CS</td>
                </tr>
                            <tr>
                    <td>Sandhya</td>
                    <td>CS</td>
                </tr>
                            <tr>
                    <td>Bhanu</td>
                    <td>EE</td>
                </tr>
                    </table>

        
                            smarty is an average language.
        
    </div>

        <h3>For Loop</h3>
            <li>1</li>
            <li>3</li>
            <li>5</li>
            <li>7</li>
            <li>9</li>
            <li>11</li>
            <li>13</li>
            <li>15</li>
            <li>17</li>
            <li>19</li>
            <li>21</li>
            <li>23</li>
            <li>25</li>
            <li>27</li>
            <li>29</li>
            <li>31</li>
            <li>33</li>
            <li>35</li>
            <li>37</li>
            <li>39</li>
            <li>41</li>
            <li>43</li>
            <li>45</li>
            <li>47</li>
            <li>49</li>
    
            
    <h3>Forelse Loop</h3>
    <ul>
                    <li>10</li>
                    <li>9</li>
                    <li>8</li>
                    <li>7</li>
                    <li>6</li>
                    <li>5</li>
            </ul>


</body>

<script>
    function p() {
        alert("You have clicked the button");
    }
</script>

</html><?php }
}
