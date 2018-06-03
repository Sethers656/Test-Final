$(function () {

  var msg_count = 0;
  var room = "";
  var voted = [false, false, false, false, false, false, false, false];
  var socket = io();

  var user = {
    "username": "anonymous",
    "votedQuestions": [],
    "room": null,
    "askedQuestions": [] //time = new Date();

  };

  // Connect to socket.io
             var socket = io.connect('http://127.0.0.1:3000');
             // Check for connection
             if(socket !== undefined){
                 console.log('Connected to socket...');
               };

  $('#create_button').click(function(){
    user.room = $('#input_rm_name').val(); //This might have to be moved to sendMSG
    room = $('#input_rm_name').val();
    socket.emit('join name', room);
    return false;
  });

  socket.on('name taken', function(){
    alert("room does not exist");
  });

  socket.on('name good', function(){
  window.location.replace("/student_room");
  });

});
