# Openshift Mysql Admin

How Install and Run the Application on Openshift

This application was written in PHP.

1.) Goto your Openshift Developer Sandbox Account and Login

2.) Goto OpenShift command line terminal

3.) Create persistent Database by running this Command **oc new-app mariadb-persistent** This command will create a persistent database called **sampledb** then copy the generated mysql database credentials.

Goto the application source code and locate **data6rst.php** file and update your Mysql Credentials where appropriates.

Run **oc status** to get the status of your application and also get **Mariadb host connection Ip address and port no** for your app mysql database connections

4.) Import and run the app from github by typing **oc new-app php~https://github.com/areaboy/codeshiftapp1**

5.) Run **oc logs -f buildconfig/codeshiftapp1** to track its progress.

6.) Run **oc expose service/codeshiftapp1** to expose your app to public

7.) Run **oc get routes** to get your application url. 

copy the url to browser  to load the applivation at **http://codeshiftapp1-fredolysis-dev.apps.sandbox-m4.g2pi.p1.openshiftapps.com/codeshiftapp1/**

Finally, when accessing the application online, remember to to install  database tables by clicking on button **install App
Database Table First**.  You can then signupand Login

