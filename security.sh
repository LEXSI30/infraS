## NULL-SCAN
iptables -t filter -A INPUT -p tcp --tcp-flags ALL NONE -j LOG \
--log-prefix "IPTABLES NULL-SCAN:"
iptables -t filter -A INPUT -p tcp --tcp-flags ALL NONE -j DROP

## XMAS-SCAN
iptables -t filter -A INPUT -p tcp --tcp-flags ALL ALL -j LOG \
--log-prefix "IPTABLES XMAS-SCAN:"
iptables -t filter -A INPUT -p tcp --tcp-flags ALL ALL -j DROP

## SYNFIN-SCAN
iptables -t filter -A INPUT -p tcp --tcp-flags ALL SYN,FIN -j LOG \
--log-prefix "IPTABLES SYNFIN-SCAN:"
iptables -t filter -A INPUT -p tcp --tcp-flags ALL SYN,FIN -j DROP

## NMAP-XMAS-SCAN
iptables -t filter -A INPUT -p tcp --tcp-flags ALL URG,PSH,FIN -j LOG \
--log-prefix "IPTABLES NMAP-XMAS-SCAN:"
iptables -t filter -A INPUT -p tcp --tcp-flags ALL URG,PSH,FIN -j DROP

## FIN-SCAN
iptables -t filter -A INPUT -p tcp --tcp-flags ALL FIN -j LOG \
--log-prefix "IPTABLES FIN-SCAN:"
iptables -t filter -A INPUT -p tcp --tcp-flags ALL FIN -j DROP

## NMAP-ID
iptables -t filter -A INPUT -p tcp --tcp-flags ALL URG,PSH,SYN,FIN -j LOG \
--log-prefix "IPTABLES NMAP-ID:"
iptables -t filter -A INPUT -p tcp --tcp-flags ALL URG,PSH,SYN,FIN -j DROP

## SYN-RST
iptables -t filter -A INPUT -p tcp --tcp-flags SYN,RST SYN,RST -j LOG \
--log-prefix "IPTABLES SYN-RST:"
iptables -t filter -A INPUT -p tcp --tcp-flags SYN,RST SYN,RST -j DROP

## SYN-FLOODING
iptables -t filter -N syn-flood
iptables -t filter -A INPUT -i eth0 -p tcp --syn -j syn-flood
iptables -t filter -A syn-flood -m limit --limit 1/sec --limit-burst 4 -j RETURN
iptables -t filter -A syn-flood -j LOG \
--log-prefix "IPTABLES SYN-FLOOD:"
iptables -t filter -A syn-flood -j DROP
