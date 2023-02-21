Class : SecurePassword
=============================================================================================
This technique of generating password hash (or password digest) generates strong hash of plain
text password. And for authentication, it matches a generated hash with a plain password.
 
Modern computers can generate both md5() and sha1() very quickly, thousands per seconds. Thus
generating hashes and matching with existing hashes (for hacking) is easy. The present technique 
implements a kind of hashing that makes strong salt, decodes that and makes hash with that decoded
salt and the given password. It gives a variable length strong hash that makes attackers' job tough.
    

Description:
This technique - 
1. Creates strong salt of given length
2. Makes that salt more strong by decoding it to binary data
3. Creates hash appending that salt to the output of secure hash algorithm - 1 
   (sha1)generated hash. Parameter of SHA1 in this case is (decoded salt + plainpassword) 
4. In matching a password with a stored hash, 

   (i) The salt is extracted from given/stored hash and decoded first
   (ii) Then sha1() is implemented on that salt + plain password
   (iii) Then this hash is compared with the sha1() generated-hash portion of given/stored hash
   

Strength :
1. If no parameter is given, initSalt() generates random salt that eventually generates random password hash for the same plain password. 
2. When password characters are only plaintext, attackers' job is easy. Use of base64_decode() 
   helps this technique generate more strong password since the hash contains binary data.
3. Changing the length of salt (saltLength), you can generate password of variable lengths(upto 70 characters).
   This strengthens the password and makes attackers' job tough.  

   
And Me:
I am a hardcore C/C++ and PHP programmer. I enjoy my times in implementing varities of freelancing works. In doing many
kind of web works, I experienced some securiy issues and hence thought this of devising technique. Then I designed and implemented this.

Please rate this class if you like and if it comes to your needs. Please feel free to contact me for 
any suggestion and/or further assistance regarding the technique and its implementation.

==============================================================================
MA Razzaque Rupom
Moderator, phpResource Group
http://groups.yahoo.com/group/phpresource/
My Blog : https://rupom.wordpress.com
Emails:
rupom_315@yahoo.com
rupom.bd@gmail.com