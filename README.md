Quick and dirty way to serve monster hunter psp dlc.
I just first used PHP two days ago for this. So don't expect any code quality. 

Our dear JPCSP can acess online, but unfortunately the MHP1 server is dead.

I don't think the psp dlc server will die anytime soon, 
I decided to preserve dlcs sites and make a barebone mhp1 dlc site that can serve dlc. 

![alt text](/image/img0.PNG)
![alt text](/image/img1.PNG)

Of course you MUST redirect to you server instead official server.
I redirect URLs through my own DNS resolver, maybe you can use a proxy server instead.


I considered a very simple tool to inject quest (decrypts save with such as psp-save or sed with gamekey and injects the quest again at a specific location of save), But it's inconvenience that you have to do every time you want to change dlc. In fact, tool like MHP_CHARA and MHP_QUEST already exist.

By the way, JPCSP can export gamekey to decrypt to save. If you can't find the gamekey to decrypy save, try it.





