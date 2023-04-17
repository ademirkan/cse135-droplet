# TEAM
Arif Demirkan - A16609174

# GRADER ACCOUNT
user: grader
password: tritongrader199

# PAGE
https://www.arifdemirkan.com/

# GITHUB AUTODEPLOY
I created a GitHub auto-pull feature by using GitHub Actions. I set up a workflow in the repository that triggers on a push event to the main branch. In this workflow, we defined a job that uses the 'appleboy/ssh-action' action to establish an SSH connection to the server. Once connected, the job executes a series of commands to navigate to the desired directory, fetch the latest changes from the repository.

# COMPRESSION
After enabling compression in Apache, all the HTML, CSS, JS files were compressed, reducing the already small file sizes. In Chrome dev tools, we see that the header for every file retrieved includes 'Content-Encoding: gzip', indicating all the files in our server delivered to the client were compressed using gzip encoding.

# HEADER
I ran sudo a2enmod headers to enable mod_headers. For my base website vhost file, I added Header set Server "CSE135 Server" in order to change the name of the server. With this, the server name is obscured as "CSE135 Server" in the header of requests.
