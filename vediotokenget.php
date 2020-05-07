

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Click To Call Tutorial</title>
  <!-- We use Twitter Bootstrap as the default styling for our page-->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





  


</head>


<body style= "background-image: url('assets/img/hero-bg.jpg')  ;
             ">


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">View Pro</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li><a id="agent-username">
          Welcome:<?php include('logincheck.php');?> 
        </a>  
        </li>
        <li><a href="agent-signup.php">Add Agent</a></li>
          <li><a href='logout.php'>Logout</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  </h3>
  <script src="vediotoken3.js"></script>
  






  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <link href="agent-chat.css" rel="stylesheet">
  <link href="agent-live-preview.css" rel="stylesheet">
  


  <div class="row">
  <div class="col-lg-8 col-md-12  col-sm-12 col-xs-12">

    
    <div class="aside"  >
    
          <div class="panel messages-panel">
            <div class="contacts-list">
              <div class="inbox-categories">
                <div data-toggle="tab" data-target="#inbox" class="active"> Inbox </div>

              </div>
              <div class="tab-content">
                <div id="inbox" class="contacts-outter-wrapper tab-pane active">
                  <form class="panel-search-form info form-group has-feedback no-margin-bottom">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <span class="fa fa-search form-control-feedback"></span>
                  </form>
                  <div class="contacts-outter">
                    <ul class="list-unstyled contacts" id="inbox-msg-contacts">



                      <li data-toggle="tab" data-target="#inbox-message-4" class="" aria-expanded="true">
                        <div class="message-count"> 2 </div>
                        <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                        <div class="vcentered info-combo">
                          <h3 class="no-margin-bottom name"> Test Client </h3>
                          <h5> I am here for Demo purpose only </h5>
                        </div>
                        <div class="contacts-add">
                          <span class="message-time"> 6:13 <sup>AM</sup></span>
                          <i class="fa fa-trash-o"></i>
                          <i class="fa fa-paperclip"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="sent" class="contacts-outter-wrapper tab-pane">
                  <form class="panel-search-form success form-group has-feedback no-margin-bottom">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <span class="fa fa-search form-control-feedback"></span>
                  </form>
                  <div class="contacts-outter">
                    <ul class="list-unstyled contacts success">
                      <li data-toggle="tab" data-target="#sent-message-1" aria-expanded="false">
                        <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                        <div class="vcentered info-combo">
                          <h3 class="no-margin-bottom name"> David Beckham </h3>
                          <h5> I would like to take a look at it this evening, is it possible ? </h5>
                        </div>
                        <div class="contacts-add">
                          <span class="message-time"> 2:24 <sup>AM</sup></span>
                          <i class="fa fa-trash-o"></i>
                          <i class="fa fa-paperclip"></i>
                        </div>
                      </li>
                      <li data-toggle="tab" data-target="#sent-message-2" aria-expanded="false">
                        <div class="message-count"> 7 </div>
                        <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                        <div class="vcentered info-combo">
                          <h3 class="no-margin-bottom name"> Jeff Williams </h3>
                          <h5> Hello, Dennis. I will take a look at it tomorrow, because I'm </h5>
                        </div>
                        <div class="contacts-add">
                          <span class="message-time"> 12:41 <sup>AM</sup></span>
                          <i class="fa fa-trash-o"></i>
                          <i class="fa fa-paperclip"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="marked" class="contacts-outter-wrapper tab-pane">
                  <form class="panel-search-form warning form-group has-feedback no-margin-bottom">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <span class="fa fa-search form-control-feedback"></span>
                  </form>
                  <div class="contacts-outter">
                    <ul class="list-unstyled contacts warning">
                      <li data-toggle="tab" data-target="#marked-message-1" aria-expanded="false">
                        <div class="message-count"> 2 </div>
                        <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                        <div class="vcentered info-combo">
                          <h3 class="no-margin-bottom name"> Jessica Franco </h3>
                          <h5> Hello, Dennis. I wanted to let you know we reviewed your proposal and decided </h5>
                        </div>
                        <div class="contacts-add">
                          <span class="message-time"> 1:44 <sup>AM</sup></span>
                          <i class="fa fa-trash-o"></i>
                          <i class="fa fa-paperclip"></i>
                        </div>
                      </li>
                      <li data-toggle="tab" data-target="#marked-message-2" aria-expanded="false">
                        <div class="message-count"> 1 </div>
                        <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                        <div class="vcentered info-combo">
                          <h3 class="no-margin-bottom name"> Pavel Durov </h3>
                          <h5> Hey, we need your help for our next Telegram re-design. </h5>
                        </div>
                        <div class="contacts-add">
                          <span class="message-time"> 3:23 <sup>AM</sup></span>
                          <i class="fa fa-trash-o"></i>
                          <i class="fa fa-paperclip"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div id="drafts" class="contacts-outter-wrapper tab-pane">
                  <form class="panel-search-form dark form-group has-feedback no-margin-bottom">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <span class="fa fa-search form-control-feedback"></span>
                  </form>
                  <div class="contacts-outter">
                    <ul class="list-unstyled contacts dark">
                      <li data-toggle="tab" data-target="#draft-message-1" aria-expanded="false">
                        <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                        <div class="vcentered info-combo">
                          <h3 class="no-margin-bottom name"> Milla Shiffman </h3>
                          <h5> Hello, Mila, can you send me the latest pack of icons, I need </h5>
                        </div>
                        <div class="contacts-add">
                          <span class="message-time"> 4:22 <sup>AM</sup></span>
                          <i class="fa fa-trash-o"></i>
                          <i class="fa fa-paperclip"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-content" id="inbox-messages-tab">
              <div class="tab-pane message-body active" id="inbox-message-4">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">




                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane message-body" id="inbox-message-2">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">
                    <div class="message info">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Mark Zuckerberg </h4>
                          <h5> <i class="fa fa-clock-o"></i> 3:45 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Hi, Dennis. How's it going with your latest project?
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 3:52 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Hello. It's going well, thanks, but I may need your help tomorrow evening. Will you be available ?
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message info">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Mark Zuckerberg </h4>
                          <h5> <i class="fa fa-clock-o"></i> 3:56 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Of course, just call me before that, in case I forget.
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 4:01 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Great, thank you.
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane message-body" id="inbox-message-3">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">
                    <div class="message info">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Evan Williams </h4>
                          <h5> <i class="fa fa-clock-o"></i> 5:07 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Hey, you asked for my feedback, it's brilliant. Damn, I envy you I didn't come up with something this good :D Keep it up, man, it's going to be very popular. Trust me !
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 5:16 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Wow, thanks. You'll be my main template tester from now on :)
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message info">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Evan Williams </h4>
                          <h5> <i class="fa fa-clock-o"></i> 5:21 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          I'm all in, as long as you continue to make such great templates.
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>



              <div class="tab-pane message-body" id="sent-message-1">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 2:05 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Hi, I've just finished the stickers you wanted. I'll send them to you in an archive in 10 minutes.
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message success">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> David Beckham </h4>
                          <h5> <i class="fa fa-clock-o"></i> 2:11 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Hello, Dennis. Thanks. Also how's it going with our latest football website. Do you need any additional help or information?
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message success">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> David Beckham </h4>
                          <h5> <i class="fa fa-clock-o"></i> 2:24 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          I would like to take a look at it this evening, is it possible ?
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 2:25 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            It's going well, no need for any other help, thanks. Sure, send me a message when you'll be ready.
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane message-body" id="sent-message-2">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 12:36 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Hi, can you please test my new template Dauphin and tell me if you like it ?
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message success">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Jeff Williams </h4>
                          <h5> <i class="fa fa-clock-o"></i> 12:41 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Hello, Dennis. I will take a look at it tomorrow, because I'm already fed up with the current project.
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 12:46 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Thanks :)
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane message-body" id="marked-message-1">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">
                    <div class="message warning">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Jessica Fresco </h4>
                          <h5> <i class="fa fa-clock-o"></i> 1:44 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Hello, Dennis. I wanted to let you know we reviewed your proposal and decided you'll start working together with our UI/UX team on Tuesday, January 10th, 2017. Congratulations and thank you!
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 1:51 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Hello, great news. I'm sure we're going to make something amazing together!
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane message-body" id="marked-message-2">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">
                    <div class="message warning">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Pavel Durov </h4>
                          <h5> <i class="fa fa-clock-o"></i> 3:23 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Hey, we need your help for our next Telegram re-design. Are you available to talk about this tomorrow evening at around 8 PM ?
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 3:31 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Hello, yes I will. It's always a pleasure to work with you and your team :)
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                    <div class="message warning">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-info">
                          <h4> Pavel Durov </h4>
                          <h5> <i class="fa fa-clock-o"></i> 3:35 PM </h5>
                        </div>
                        <hr>
                        <div class="message-text">
                          Perfect, talk to you tomorrow evening.
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane message-body" id="draft-message-1">
                <div class="message-top">
                  <a class="btn btn btn-success new-message"> <i class="fa fa-envelope"></i> New Message </a>

                  <div class="new-message-wrapper">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Send message to...">
                      <a class="btn btn-danger close-new-message" href="#"><i class="fa fa-times"></i></a>
                    </div>

                    <div class="chat-footer new-message-textarea">
                      <textarea class="send-message-text"></textarea>
                      <label class="upload-file">
                        <input type="file" required="">
                        <i class="fa fa-paperclip"></i>
                      </label>
                      <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                    </div>
                  </div>
                </div>

                <div class="message-chat">
                  <div class="chat-body">

                    <div class="message my-message">
                      <img alt="" class="img-circle medium-image" src="https://bootdey.com/img/Content/avatar/avatar1.png">

                      <div class="message-body">
                        <div class="message-body-inner">
                          <div class="message-info">
                            <h4> Dennis Novac </h4>
                            <h5> <i class="fa fa-clock-o"></i> 4:22 PM </h5>
                          </div>
                          <hr>
                          <div class="message-text">
                            Hello, Mila, can you send me the latest pack of icons, I need all the source files. Thanks.
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>

                  </div>

                  <div class="chat-footer">
                    <textarea class="send-message-text"></textarea>
                    <label class="upload-file">
                      <input type="file" required="">
                      <i class="fa fa-paperclip"></i>
                    </label>
                    <button type="button" class="send-message-button btn-info"> <i class="fa fa-send"></i> </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  

  <div class="col-lg-4 col-md-12  col-sm-12 col-xs-12 " style= "padding:15px" id="local-media">
  <h1 class="dcol-lg-12" style = "text-align:center; background-color: white; padding:15px; border:15px;margin-right:15px;">My Live Preview</h1>
  
  <div class = "col-lg-6"><button type="button"  id="gettoken" class="btn btn-success btn-lg" style= "width:80%;text-align: center;">Start Service</button></div>
  <div class = "col-lg-6"><button type="button" id="pauseservice" class="btn btn-danger btn-lg" style= "width:80%; text-align: center;">Stop Service</button></div>
  
  </div>

  
</div>



  </div>


</body>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">



<script src="//media.twiliocdn.com/sdk/js/video/releases/2.0.0/twilio-video.min.js"></script>

</body>

</html>