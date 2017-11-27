# ybcwebsite
Yewongel Berhan Church Web Site 

Proj structure:  
================ 
 ybcwebsite:  
      <submodule1:pr_openchurch:branch->dev>  
      <submodule2:pr_drupalcore:branch->dev>  
      <submodule3:.....>  


#Adding Submodule: 
=========================
#Added pr_openchurch as submodule  
#changed push/pull location to abreham/openchurch.git [you can relocate this module to common place.]   
#created 'dev' branch which we are going to work on that point to 8.x-2.x version.    
#[Later can merge fromdrupal git if there are usefull changes.]   

  >>git clone https://git.drupal.org/project/openchurch.git  
  >>cd openchurch/  
  >>git checkout remotes/origin/8.x-2.x  
  >>git remote set-url origin git+ssh://git@github.com/abreham/openchurch.git 
  >>git checkout -b dev  
  >>git push --set-upstream origin dev  
  >>cd ybcwebsite  
  >>git submodule add --branch dev https://github.com/abreham/openchurch.git pr_openchurch 

#Removing password requirement when pushing
===========================================
1.>> ssh-keygen -t rsa  
2.>> copy /home/abreham/.ssh/id_rsa.pub to your github account rsa settings:https://github.com/settings/keys>  
3.>> git remote set-url origin git+ssh://git@github.com/yonas2017/ybcwebsite.git  
4.>> git remote show origin 
