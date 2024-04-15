<?php
include '../template/adminTemp/adminHeader.php';
?>

<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11">
                <div class="card easion-card">
                    <div class="card-header ">
                        <div class="easion-card-icon">
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="easion-card-title"> Ticket Comments </div>
                        <div class="easion-card-menu">

                        </div>
                    </div>
                    <div class="card-body ">
                        <section class="comment-list">
                            <article class="row">
                                <div class="col-md-10 col-sm-10">
                                    <div class="panel panel-default arrow left">
                                        <div class="panel-heading right">
                                                <button type="button" class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-eye-slash"></i> Closed
                                                </button>
                                            
                                                <button type="button" class="btn btn-success btn-sm">
                                                <i class="fa-solid fa-eye"></i> Open
                                                </button>
                                            
                                            <span class="ticket-title"></span>
                                        </div>
                                        <div class="panel-body">
                                            <div class="comment-post">
                                                <p>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-heading right">
                                            <span class="glyphicon glyphicon-time"></span> <time class="comment-date"
                                                datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i>
                                                </time>
                                            &nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>
                                            
                                            &nbsp;&nbsp;<span class="glyphicon glyphicon-briefcase"></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </article>

                            
                                <article class="row">
                                    <div class="col-md-10 col-sm-10">
                                        <div class="panel panel-default arrow right">
                                            <div class="panel-heading">
                                                
                                                    <span class="glyphicon glyphicon-user"></span>
                                                    
                                                    <span class="glyphicon glyphicon-user"></span>
                                                    
                                                &nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <time
                                                    class="comment-date" datetime="16-12-2014 01:05"><i
                                                        class="fa fa-clock-o"></i>
                                                    </time>
                                            </div>
                                            <div class="panel-body">
                                                <div class="comment-post">
                                                    <p>
                                                        
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                            

                            <form method="post" id="ticketReply">
                                <article class="row">
                                    <div class="col-md-10 col-sm-10">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" id="message" name="message"
                                                placeholder="Enter your reply..." required></textarea>
                                        </div>
                                    </div>
                                </article>
                                <article class="row">
                                    <div class="col-md-10 col-sm-10">
                                        <div class="form-group">
                                            <input type="submit" name="send" id="send" class="btn btn-success"
                                                value="Send" />
                                        </div>
                                    </div>
                                </article>
                                <input type="hidden" name="ticketId" id="ticketId"
                                    value="" />
                                <input type="hidden" name="action" id="action" value="saveTicketReplies" />
                            </form>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Continuation of Header -->
</div>
</div>