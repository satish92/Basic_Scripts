#importing from multiple remote hosts to single destination 
#directory indicates to replace with your desired directory 

for i in " your host names"
do
#creating temporary directory in local machine
mkdir -p /directory/$i
echo " directory created for $i"
echo "file transfer started for $i"
scp username@$i:/directory/* /tmp/scripts/$i
echo "file transfer completed for $i"

#To validate transferred files and add an extra string(host name) for each line and save as a file
# $i from below line respresents from above for loop
ssh username@$i ls -l /directory | head -1 | sed "s/^/$i /"  >> b.txt

#to validate tansferred files from remote hosts to local machine and appending host names on each line and saving it as a seperate file
ls -l "/tmp/scripts/$i" | head -1| sed "s/^/$i /" >> c.txt

done
#to identify difference between two generated files
diff file1 file2

exit 0
~
