<?php
/**
 * Created by PhpStorm.
 * User: dep
 * Date: 20.06.17
 * Time: 19:55
 */

?>

<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style type="text/css">
        .chat
        {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .chat li
        {
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px dotted #B3A9A9;
        }

        .chat li.left .chat-body
        {
            margin-left: 60px;
        }

        .chat li.right .chat-body
        {
            margin-right: 60px;
        }


        .chat li .chat-body p
        {
            margin: 0;
            color: #777777;
        }

        .panel .slidedown .glyphicon, .chat .glyphicon
        {
            margin-right: 5px;
        }

        .panel-body
        {
            overflow-y: scroll;
            height: 750px;
        }

        ::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }
    </style>
</head>
<body>

<div id="chatContainer" class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
                            </span>Busy</a></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
                                    Away</a></li>
                            <li class="divider"></li>
                            <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>
                                    Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="chatInput" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btnChatSend">Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="chatTemplates" style="display: none;">
        <div id="itemTemplate">
            <li class="left clearfix">
                <span class="chat-img pull-left">
                    <img src="" alt="" class="img-circle" />
                </span>
                <div class="chat-body clearfix">
                    <div class="header">
                        <strong class="primary-font"></strong>
                        <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time"></span>
                        </small>
                    </div>
                    <p>{{msg}}</p>
                </div>
            </li>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var chatContainer = $('div#chatContainer');
        var chatMsgList = chatContainer.find('ul.chat');
        var chatInput = chatContainer.find('#chatInput');

        function addMessage(msg)
        {
            chatMsgList.append(prepareMsgView({msg: msg}));
        }

        function prepareMsgView(msgData) {
            var msg = chatContainer.find('#chatTemplates #itemTemplate li').clone();
            if (msgData.msg != "undefined") {
                msg.find('p').text(msgData.msg);
            }
            msg.find('span img').attr({
                src: 'http://placehold.it/50/55C1E7/fff&text=U',
                alt: 'User Avatar'
            });
            msg.find('div.chat-body strong').text('User Name');
            msg.find('div.chat-body small').append('TimeTimeTime');
            return msg;
        }

        chatContainer.find('button#btnChatSend').click(function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $.ajax({
                url: 'send.php',
                method: 'POST',
                data: 'message=' + chatInput.val(),
                dataType: 'json',
                success: function(data, textStatus, jqXHR) {
                    console.log(data);
                    addMessage(chatInput.val());
                    chatInput.val('');
                }
            });
        });

        var intervalId = setInterval(function(){ checkNewMessages() }, 10000);
        var existsMessages = [];
        function insert(element, array)
        {
            array.splice(locationOf(element, array) + 1, 0, element);
            return array;
        }
        function locationOf(element, array, start, end)
        {
            start = start || 0;
            end = end || array.length;
            var pivot = parseInt(start + (end - start) / 2, 10);
            if (end-start <= 1 || array[pivot] === element) return pivot;
            if (array[pivot] < element) {
                return locationOf(element, array, pivot, end);
            } else {
                return locationOf(element, array, start, pivot);
            }
        }
        function inArray(needle, haystack) {
            var length = haystack.length;
            for(var i = 0; i < length; i++) {
                if(haystack[i] == needle) return true;
            }
            return false;
        }
        function checkNewMessages()
        {
            $.ajax({
                url: 'check.php',
                method: 'POST',
                dataType: 'json',
                success: function(data, textStatus, jqXHR) {
                    if (data) {
                        $.each(data, function (index, value) {
                            if (!inArray(index, existsMessages)) {
                                insert(index, existsMessages);
                                addMessage(value.msg);

                                console.log(existsMessages);
                                console.log(value);
                            }
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    clearInterval(intervalId);
                }
            });
        }
    });
</script>
</body>
</html>
