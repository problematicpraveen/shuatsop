<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SHUATS NO DUES FORM AND ADMIT CARD WITHOUT LOGIN | Created By Praveen @ProblematicPraveen</title>
    <style>
        #mcc
        {
            margin-top: 30px;
            margin-left: 20px;
            margin-right: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        #loader
        {
            display: none;
        }
        #err_pl
        {
            display: none;
            color: #EF0909;
            font-weight: bold;
        }
        #result_area
        {
            display: none;
        }
        #mbcc
        {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
  </head>
  <body>
      
      <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #FFFFFF;">
      <img src="https://i.postimg.cc/5NmGkpLN/download.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      &nbsp;SHUATS INFORMATION SYSTEM
    </a>
  </div>
</nav>

<div class="card-body" id="mbcc">
        <i>This portal allows you to download Admit Card and No Dues Form of SHUATS Student Without Login</i>
    </div>
      
  <div class="card" id="mcc">
  <div class="card-body">
      <div class="spinner-border mt-3" role="status" id="loader">
            <span class="visually-hidden">Loading...</span>
        </div>
        <div class="mt-2" id="err_pl">
        </div>
        <div class="mt-3">
            <input type="text" class="form-control" placeholder="Enter Unique Student P.ID." name="pid" id="student_pid"/>
        </div>
        <div class="mt-3">
            <button class="btn btn-success btn-sm" id="process_pid"> Process </button>
        </div>
        
        <div id="result_area">
        <hr/>
        <div id="display_ress">
            
        </div>
        </div>
  </div>
    </div>
    
    <div class="card-body" id="mcc">
        Created By <a href="https://praveen.emoro.tech" style="text-decoration: none; color: #19957B; font-weight: bold;" target="_blank">@ProblematicPraveen</a>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    
<script>
    $("#process_pid").click(function(){
        process();
    });
    function process()
    {
        $("#result_area").fadeOut();
        $("#err_pl").hide();
        $("#loader").show();
        var yapi = '/api/processPID';
        var pid = $("#student_pid").val();
        $.ajax({
            "url": yapi,
            "data": "pid=" + pid,
            "type": "POST",
            "beforeSend": function()
            {
                
            },
            "success": function(data)
            {
                try{ data = JSON.parse(data); }catch(err){}
                if(data.status == "success")
                {
                    var tfa = "";
                    tfa = tfa + '<p style="color:#0956EF; font-weight: bold;">Choose What You Need To Download - <span style="color: #FF0F0F;">' + pid + '</span></p>';
                    $.each(data.data, function(key, value){
                        tfa = tfa + '<a class="btn btn-dark btn-sm" href="' + value.link +'" target="_blank">' + value.name +'</a>';
                        tfa = tfa + '&nbsp;&nbsp;';
                    });
                    $("#display_ress").html(tfa);
                    $("#loader").fadeOut();
                    $("#result_area").fadeIn();
                }
                else
                {
                    if(data.status == "error")
                    {
                        show_err(data.msg);
                    }
                    else
                    {
                        show_err('Something Went Wrong');
                    }
                }
            },
            "error": function()
            {
                show_err('Failed To Connect With Server');
            }
        });
    }
    function show_err(err)
    {
        $("#loader").fadeOut();
        window.setTimeout(function()
        {
            $("#err_pl").text(err);
            $("#err_pl").fadeIn();
        }, 350);
    }
</script>

  </body>
</html>