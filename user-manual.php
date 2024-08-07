<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manual - Thesis Management System</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        ol,
        ul {
            padding: 0;
            margin: 0;
        }

        ol {
            counter-reset: item;
            list-style: none;
            padding-left: 30px;
        }

        ol li {
            counter-increment: item;
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }


        ol li:before {
            content: counter(item) ". ";
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>
</head>

<body class="content">
    <div>
        <h3 style="position:absolute;margin-top:20px;">User Manual</h3>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/thesis-mgmt/header.php"); ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/thesis-mgmt/sidebar.php"); ?>
        <hr>
    </div>

    <h1>Utilizing the Thesis Management System: A User Manual </h1>
    <br>
    <h2>Setting up a Network Connection</h2>
    <ol>
        <li>Start XAMPP to run the system.</li>
        <li>Ensure that the host computer and your PC are both connected to the identical/same network.</li>
        <li>From your web browser, enter the IP address of the host computer followed by thesis-mgmt. Example: 192.168.1.1/thesis-mgmt</li>
    </ol>
    <h2>Registration</h2>
    <ol>   
        <li>After successfully accessing the system, the user will be presented with the sign-up interface.</li>
        <li>Input correct data into all required fields.</li>
        <li>Click the "Sign Up" button after completing the required fields.</li>
        <li>To initiate the activation of your account, contact the research coordinator.</li>
         </ol>
         <h3>Login Process</h3>
    <ol>   
        <li>Enter your credentials to log in. If you forgot your password, use the "Forgot
            Password" option to reset it. If you don't have an account, click "Sign Up" to register.</li>
        <li>Upon logging in, the system dashboard will be displayed.</li>
        </ol>
    <br>
    <h2>Research Coordinator's Interface</h2>
    
    <h3>System Overview</h3>
        <ol>
        <li><strong>Add Documents:</strong> Click on the "Add Document" button to upload files such as forms.</li>
        <li><strong>Dashboard:</strong>The dashboard provides summary or overview of the system.</li>
         </ol>
    <h3>Analyzing Progress Charts</h3>
         <ol>
        <li>Choose the tab labeled "Progress Chart".</li>
        <li>Select the "Download" option to download all of the files associated with a specific project.</li>
         </ol>
    <h3>User Management</h3>
         <ol>
        <li>Navigate to the "Users" tab. </li>
        <li>Upon showing the interface of users’ tab, simply click the "Edit" button beside to the user's name in order to modify their status from inactive to active. </li>
         </ol>
    <h3>Generation of Forms</h3>
         <ol>
        <li>To begin, choose the "Forms" option.</li>
        <li>Determine the specific form you wish to generate.</li>
        <li>The necessary information will be automatically inputted into the form and will be downloaded into your device.</li>
         </ol>
    <h3>Generation of Report</h3>
         <ol>
        <li>To begin, choose the "Reports" option.</li>
        <li>Choose the report you want to generate.</li>
        <li>. The report will display the necessary data in a tabular style.</li>
        <li>Select the option "Copy" in order to move the data to a Word document.</li>
         </ol>
    <h3>Managing Tasks</h3>
         <ol>
        <li>Go to the "Tasks" page to view all of the thesis project checklist. </li>
        <li>Here, you can approve all the thesis projects in checklist part wherein it is assigned to you or waits for your approval. </li>
         </ol>

    <!-- Repeat the same structure for Manual for Dean, Instructor, Adviser, and Student -->
    <br>
    <h2>Student's Interface</h2>
    <h3>After activation</h3>
    <ol>   
         <li>Log in to the system when the research coordinator has signed you up and activated your profile.</li>
        </ol>
    <h3>
Starting a New Thesis Project
</h3>
        <ol>
            <li>Go to the "Create New Thesis" tab area.</li>
            <li>Fill in the essential fields.</li>
            <li>Group members can be included already in enrolling for your thesis project. Once enrolled, they cannot create new thesis projects.</li>
            <li>To ensure a single interface, group members not yet enrolled must match their inputs with yours.</li>
        </ol>
        <h3>Browsing at the Dashboard</h3>
         <ol>
        <li>Enroll your thesis to access the system overview by visiting the dashboard. </li>
      </ol>
    <h3>Analyzing Progress Charts</h3>
         <ol>
        <li>Visit the "Progress Chart" page to see the advancements made by other groups.</li>
        <li>Note that this is for viewing only and cannot be modified.</li>
         </ol>
  
    <h3>Generation of Forms</h3>
         <ol>
        <li>Click on the "Forms" tab.</li>
        <li>Select the form you wish to generate.</li>
        <li>Generated forms will then be downloaded into your device. </li>
    </ol>
    <h3>Managing Tasks</h3>
         <ol>
        <li>Go to the "Tasks" page to view your own thesis project checklist. Note: only your project will appear here. </li>
        <li>Here, you can upload and delete submissions.</li>
         </ol>
         <br>
    <h2>Instructors' interface </h2>
    <h3>After activation</h3>
    <ol>   
         <li>Log in to the system when the research coordinator has signed you up and activated your profile.</li>
        </ol>
    <h3>

        <h3>Browsing at the Dashboard</h3>
         <ol>
        <li>Access the system overview by visiting the dashboard. </li>
      </ol>
    <h3>Analyzing Progress Charts</h3>
         <ol>
        <li>Visit the "Progress Chart" page to see the advancements made by other groups.</li>
        <li>Note that this is for viewing only and cannot be modified.</li>
         </ol>
  
    <h3>Generation of Forms</h3>
         <ol>
        <li>Click on the "Forms" tab.</li>
        <li>Select the form you wish to generate.</li>
        <li>Generated forms will then be downloaded into your device. </li>
        </ol>
    <h3>Managing Tasks</h3>
         <ol>
        <li>Go to the "Tasks" page to view all the thesis project checklist under you. Note: only the projects you hold will appear here.</li>
        <li>Here, you can approve or reject the submissions made by the students.</li>     
    </ol>
         <br>
    <h2>Advisers' interface </h2>
    <h3>After activation</h3>
    <ol>   
         <li>Log in to the system when the research coordinator has signed you up and activated your profile.</li>
        </ol>
    <h3>

        <h3>Browsing at the Dashboard</h3>
         <ol>
        <li>Access the system overview by visiting the dashboard. </li>
      </ol>
    <h3>Analyzing Progress Charts</h3>
         <ol>
        <li>Visit the "Progress Chart" page to see the advancements made by other groups.</li>
        <li>Note that this is for viewing only and cannot be modified.</li>
         </ol>
  
    <h3>Generation of Forms</h3>
         <ol>
        <li>Click on the "Forms" tab.</li>
        <li>Select the form you wish to generate.</li>
        <li>Generated forms will then be downloaded into your device. </li>
        </ol>
    <h3>Managing Tasks</h3>
         <ol>
        <li>Go to the "Tasks" page to view all the thesis project checklist under you. Note: only the projects you hold will appear here and it is just for viewing purposes only. </li>
         </ol>
         <h2>Dean's interface </h2>
    <h3>After activation</h3>
    <ol>   
         <li>Log in to the system when the research coordinator has signed you up and activated your profile.</li>
        </ol>
    <h3>

        <h3>Browsing at the Dashboard</h3>
         <ol>
        <li>Access the system overview by visiting the dashboard. </li>
      </ol>
    <h3>Analyzing Progress Charts</h3>
         <ol>
        <li>Visit the "Progress Chart" page to see the advancements made by other groups.</li>
        <li>Note that this is for viewing only and cannot be modified.</li>
         </ol>
  
    <h3>Managing Tasks</h3>
         <ol>
        <li>Go to the "Tasks" page to view all the thesis project checklist under you. Note: only the projects you hold will appear here and it is just for viewing purposes only. </li>
         </ol>
         <br>
    <p>This guide will facilitate your use and navigation of the Thesis Management System. To obtain further assistance or address any inquiries, please contact the research coordinator.</p>
</body>

</html>