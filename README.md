# ybcwebsite
Yewongel Berhan Church Web Site 

#Removing password requirement when pushing
1.>> ssh-keygen -t rsa  
2.>> copy /home/abreham/.ssh/id_rsa.pub to your github account rsa settings:https://github.com/settings/keys>  
3.>> git remote set-url origin git+ssh://git@github.com/yonas2017/ybcwebsite.git  
4.>> git remote show origin 

