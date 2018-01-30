#importing from multiple remote hosts to single destination 
#directory indicates to replace with your desired directory 

for i in " your host names"
do
#creating temporary directory in local machine
mkdir -p /directory/$i
echo " directory created for $i"
echo "file transfer started for $i"
scp username@$i:/directory/* /tmp/scripts/$i

<<<<<<< HEAD
echo "file transfer completed for $i"
#To validate transferred files and add an extra string(host naem) for each line and save as a file
=======
#To validate transferred files and add an extra string(host name) for each line and save as a file
>>>>>>> origin/master
# $i from below line respresents from above for loop
ssh username@$i ls -l /directory | head -1 | sed "s/^/$i /"  >> b.txt
# to run multiple arguments in remote host through ssh and provide your list of commands in script give input to below command
ssh -t user@localhost < script.sh 

#to validate tansferred files from remote hosts to local machine and appending host names on each line and saving it as a seperate file
ls -l "/tmp/scripts/$i" | head -1| sed "s/^/$i /" >> c.txt

done
#to identify difference between two generated files
diff file1 file2
#print n'th line from list of files ,add for loop before below line 
sed -n '14p' $i

to delete a whole  staring which contains a word
sed '/<word>/d' filename |cat -s 
ro replace string 
sed -i -e 's/<string pattern>/<new pattern to replace>/g' 
sed -i -e 's/-c updates-centos73-1611-x86_64 \\/-c updates-centos73-1611-x86_64/g' syncfile


to delete control characters in vi 
:%s/ ^M/ /g 
# to get ^M ctrl-v + ctrl-m 
exit 0

echo "I am 999 years old." | tr -dc '0-9' # to extract only numbers in output
du -sh -- * | sort -hr # to display summary size of sub directories in directory 

entering postgresql CLI
psql -U postgres

\l - to list all databases in postgresql
\dt - to list all tables in current db


to remove orphan packages in spacewalk 

To print last work after hiphen in a string( to print 123)
echo "foo-bar-123" | awk -F- '{print $NF}'

To remove spaces in string 
echo "   3918912k " | sed 's/ //g'
3918912k

counter in bash
count=0
(( count += $<variable>))

# to remove empty lines
sed '/^\s*$/d'

#awk to perform division
awk "BEGIN {print 100/3}"



