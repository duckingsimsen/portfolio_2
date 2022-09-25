# portfolio_2
This is part of how to make bulletin board\
As a language, HTML css was used at the front end, php was used as a background, and Apache was used to use the live server\
Php technology allows you to connect to mysql and save it to mysql and load it to mysql so that you can write and view what you wrote\
And I set it up so that each initiator can be classified by adding a primary key for each initiator\
Also, if the password in mysql is compared with the password to be entered in mysql when deleting or modifying the text, it can be deleted or modified or impossible\
It also added a writing lock function If you set the writing lock function when writing,\
you can check the writing by typing the password It is similar to the one applied to the deletion and revision of the text\
And I added a comment function\
The comment function created a new comment-only db, unlike the db that occurs when writing\
This comment function is allowed to enter the corresponding opening edition In the opening post above,\
only the comments corresponding to the primary key are selected using the primary key and set to appear only in the corresponding post\
In addition, the comment function has been set so that it can be deleted and modified just like the function of deleting and modifying posts\
If you write a post, you can check it as a recent post, so the recent posts today are marked as the latest\
You can also upload the file.\
If you upload the file, you can go up to the folder and check the article to see which file is uploaded, and if you click the file, you can download it\
In addition, the number of opening posts stored in db and the number of pages that can be opened in one page were checked,\
and the number of pages could be checked by identifying the number\
