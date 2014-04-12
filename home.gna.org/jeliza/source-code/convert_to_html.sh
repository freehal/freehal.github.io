
for x in $(find . -name "*.php"); do
	php-cgi $x | sed 's@.php@.shtml@g' > $(echo $x | sed 's@.php@.shtml@g').2
	cat $(echo $x | sed 's@.php@.shtml@g').2 | tail -n $[$(cat $(echo $x | sed 's@.php@.shtml@g').2 | wc -l) - 3] > $(echo $x | sed 's@.php@.shtml@g')
	rm $(echo $x | sed 's@.php@.shtml@g').2
done
