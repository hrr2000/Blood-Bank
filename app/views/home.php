<!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- META TAGS -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <!-- PAGE TITLE -->
            <title>Bank</title>

            <!-- CSS FILES -->
            <link href="<?=asset('css/style.css');?>" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!-- JS FILES -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        </head>
        <body>
            <div class="container-c">
            <img style="width:100%;padding:15px;" src="<?=asset('images/logo.png');?>">
            <ul id="forms" class="tabs">
                <li class="tab col s3"><a onclick="M.toast({html: 'Search for a Donator'})" class="active" href="#form-1">Search</a></li>
                <li class="tab col s3"><a onclick="M.toast({html: 'Save others Life :D'})" href="#form-2">Donate</a></li>
            </ul>
            <div id="form-1" class="col s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="browser-default">
                                <option value="" disabled selected>Choose Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="submit" type="submit" class="btn waves-effect">
                            <label for="submit">Email</label>
                        </div>
                    </div>
                </form>
            </div>
            <div id="form-2" class="col s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" class="validate">
                            <label for="name">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="browser-default">
                                <option value="" disabled selected>Choose Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="phone" type="text" class="validate">
                            <label for="phone">Phone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="address" type="text" class="validate">
                            <label for="address">Address</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="submit" type="submit" class="btn waves-effect">
                            <label for="submit">Email</label>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            
            <script src="<?=asset('js/script.js');?>" ></script>
        </body>
    </html>

