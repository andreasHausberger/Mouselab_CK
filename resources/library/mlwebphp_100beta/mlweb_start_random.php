<html>
<head>
    <title>Mouselab WEB</title>
    <link rel="stylesheet" href="mlweb.css" type="text/css">

    <script language="javascript">
        function startExp(formlink) {
// randomizer for 6 conditions
// this script will choose one of six links randomly 
// it also sets the subject and condnum in a cookie

//calculate random number
            var selectedCondition = parseInt(document.getElementById("condnum").value);

            if (typeof selectedCondition != "number" || selectedCondition == "" || selectedCondition <= 0) {
                selectedCondition = Math.floor(Math.random() * 6) + 1;
            }

            switch (selectedCondition) {
                case 1:
                    // link for condition 1
                    linkstr =  "/public/include/intro/index.php?condition=1";
                    break;

                case 2:
                    // link for condition 2
                    linkstr = "/public/include/intro/index.php?condition=2";
                    break;

                case 3:
                    // link for condition 3
                    linkstr = "/public/include/intro/index.php?condition=3";
                    break;

                case 4:
                    // link for condition 4
                    linkstr = "/public/include/intro/index.php?condition=4";
                    break;

                case 5:
                    // link for condition 5
                    linkstr = "/public/include/intro/index.php?condition=5";
                    break;

                case 6:
                    // link for condition 6
                    linkstr = "/public/include/intro/index.php?condition=6";
                    break;

                default:
                    break;
            }


// get values from form
            subject = formlink.subject.value;
            condnum = parseInt(formlink.condnum.value);
            let prolificPID = formlink.prolificPID.value;
            let studyID = formlink.studyID.value;
            let sessionID = formlink.sessionID.value;

// set cookies
            document.cookie = "mlweb_condnum=" + condnum + "; path=/";
            document.cookie = "mlweb_subject=" + subject + "; path=/";

            var newWind = window.open(linkstr + "&sname=" + subject + "&prolificPID=" + prolificPID + "&studyID=" + studyID + "&sessionID=" + sessionID +"&page=1", "survey", "height=" + (1000).toString() + ",width=" + (1200).toString() + ",scrollbars,status,resizable, left=2, top=2")

        }
    </script>
</head>
<body>
<h1>Start of experiment</h1>
<form>
    <input type="hidden" name="prolificPID" id="prolificPID" value=<?php echo $prolificPID; ?> >
    <input type="hidden" name="studyID" id="studyID" value=<?php echo $studyID; ?> >
    <input type="hidden" name="sessionID" id="sessionID" value=<?php echo $sessionID; ?> >
    <TABLE>
        <TR>
            <TD>Subject name:</TD>
            <TD><input name="subject" type="text" id="subject"></TD>
        </TR>
        <TR>
            <TD>Condition number: </TD>
            <TD><input name="condnum" type="text" id="condnum" size="10"></TD>
        </TR>
        <TR>
            <TD colspan=2><input type="button" name="Button" value="Start Experiment" onClick="startExp(this.form)">
            </TD>
        </TR>
    </TABLE>
</form>

</body>
</html>
