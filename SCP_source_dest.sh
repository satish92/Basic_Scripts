#importing from multiple remote hosts to single destination 

for i in " your host names"
do
#creating temporary directory in local machine
mkdir -p /tmp/scripts/$i
echo " directory created for $i"
echo "file transfer started for $i"
scp skumar21@$i:/opt/spacecmd/sync-temp/* /tmp/scripts/$i
echo "file transfer completed for $i"

done

exit 0
~
