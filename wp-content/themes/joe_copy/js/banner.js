function start() {
    if(window.innerWidth <= 1024){
        var width = window.innerWidth;
    } else {
        var width = window.innerWidth;
    }

    var height = window.innerHeight;
    var autoPlay = true;

    var playerParams = {
        width: width,
        height: height,
        autoPlay: autoPlay,
        repeat: true,
        controlsEnabled: false,
        ribbonsColor: '#ffffff',
    };

    var WRAPPER_ID = 'target';
    var wrapper = document.getElementById(WRAPPER_ID);

    document.body.className = 'no-iframe login-bg';

    wrapper.className = 'no-iframe';
    wrapper.style.width = width + 'px';
    wrapper.style.height = height + 'px';
    wrapper.style.marginLeft = -Math.floor(width / 2) + 'px';
    // wrapper.style.marginTop = -Math.floor(height / 2) + 'px';

    var filename = 'project';
    var animation = {"meta":{"id":"47ffaf56512ad8d94600ba01","created":1454374727318,"modified":1454376017930,"author":"Affandi Salleh","name":"JOE-Main BG V2","authorUsername":"Affandi.Salleh","description":"","duration":5.0,"numberOfScenes":1,"projectAccess":{"visibility":"PUBLIC","writeAccess":[],"readAccess":["PUBLIC"]}},"anim":{"dimension":[1600.0,900.0],"framerate":24.0,"loop":true,"paths":["K+cGVoibM3DBerCH","Kh9nBd6rNEU5T1UtwA==","KmSgZYlAtUgN+DQesA==","KvS8ZfF+NFPhgMOYwA==","LKRO+ZTSzRM++/ABMA==","LMrM6YzTDRcqK54EMA==","LPkhQVvUyEw=","JdveXZOITA==","Je1yX8YITA==","I7XImXYsXcXcwA==","I7uknGQsokokwA==","I7uknGQhMA==","I9b8vpIhMA==","ICj5IRi/FD3ITA==","I/cEtoevC7javw==","IfnBR361yIF7wA==","IBZJSna6cwjosA==","IeSrEbi5LPUN8A==","IApHOiiEwA==","IApHOii78nhbcA==","IgRKv0AhMA==","H6ytSCIT","HxBuSnoT","IsSdI86hMA==","IzoWIdqhMA==","LKkg2Hh+TBZ2Au4w","LKvvmHn1TCmKPRIw","LKkg2Hh+SEw=","LLlAyGZO6Ew=","LMYP6Gi/q+K0eDDA","LMQ7KGfFq91MB9DA","LMYP6Gi/qEw=","KrIe9aa5oTA=","K0ouoIc4tEBZ3h34wA==","KRUQ/ljU0dbyfvVX","JAIn3TetHHkMPIww","KORSf7fa0TD5P1Yv","Kr5nf9i7tEfHDqwowA==","LIMXP8uz6Ew=","IrFXE3ahMA==","FqN7OhM=","FQbBqEw=","F1zYChAIhMA=","F1zYChM=","IOEAakCEwA==","JJG0EJoL8fFWmMA=","JIOkC20LkCEgtw==","JIu0jHKreUzH/A==","JIoHDgKrRrU4HA==","JIoHDgKLszutUw==","JIOki20Lzg6paMA=","JJG0EJoITA==","JJqGCRwL9XTagMA=","JI/6BGwLrMUDpw==","JIZcBIkrnNBI/w==","JJTEBtFLozC2/w==","JJTEBtELtm6zYw==","JI/6hGwLyoulgMA=","JJqGCRwITA==","IreYQgQhMA==","Iqie10+hMA==","INMuFciEwA==","K04xcN68tECqjnNAwA==","KR234GFy0cQ6vzN3","F6qss0cRIw8crA==","KOH5gd7A0VCzfwj3","KsUpoFjONEiDzqDOwA==","LIbWv+pNSEw=","KudcZOo+oTA=","KilrFtChNUV1RfaEMA==","KrRVor2pNWg8DmpnsA==","LMJm3+SeCEw=","IiUcqJkhMA==","IYnzN3yEwA==","IYMDPtyEwA==","I/qItt4hMA==","LItbYX4VSEw=","LK1pCbL9iEw=","LJV0Wagl6Ew=","LNXk8av+KEw=","LL5dKaa2iEw=","LMvs6KbGq+K0eDDA","LMoYKKXMq91MB9DA","LMvs6KbGqEw=","LKPoKL/Cq+K0eDDA","LKITaL7Iq91MB9DA","LKPoKL/CqEw=","Kufx8rRQITA="],"background":"#ffffff","elements":[[2,"Scene1",5.0,[[1,"Clip 3","","","","",4,[[1,[0.0,0.5],"",[-0.33161255787892263,-0.19674620658845168]],[1,[0.5,1.1],"",[-0.19674620658845168,-0.03490658503988659]],[1,[1.1,2.1],"",[-0.03490658503988659,0.24434609527920614]],[1,[2.1,2.9],"",[0.24434609527920614,0.03956079637853818]],[1,[2.9,3.7],"",[0.03956079637853818,-0.13962634015954636]],[1,[3.7,4.5],"",[-0.13962634015954636]],[1,[4.5],"",[-0.13962634015954636]],[4,[0.0,0.5],"",0],[4,[0.5,1.1],"",1],[4,[1.1,2.1],"",2],[4,[2.1,2.9],"",3],[4,[2.9,3.7],"",4],[4,[3.7,4.5],"",5],[4,[4.5],"",6]]],[11,"_0002_Layer-16.png","","",[169.0,39.0],"",4,[[2,[],"",[1.06]],[4,[0.0,2.6],"",25],[4,[2.6,5.0],"",26],[4,[5.0],"",27]]],[12,"_0018_Layer-8-copy.png","","",[90.0,89.0],"",4,[[1,[0.0,5.0],"",[0.0,6.283185307179586]],[1,[5.0],"",[6.283185307179586]],[2,[],"",[1.06]],[4,[],"",28]]],[13,"_0017_Layer-17.png","","",[107.0,31.0],"",4,[[2,[],"",[0.95]],[4,[0.0,2.5],"",29],[4,[2.5,5.0],"",30],[4,[5.0],"",31]]],[14,"_0010_Layer-1.png","","",[800.0,213.0],"",4,[[2,[],"",[1.2]],[4,[],"",68]]],[15,"Clip 2","","","","",4,[[1,[0.0,1.8],"",[0.0,0.12217304763960307]],[1,[1.8,2.7],"",[0.12217304763960307,0.2792526803190927]],[1,[2.7],"",[0.2792526803190927]],[4,[0.0,1.8],"",69],[4,[1.8,2.7],"",70],[4,[2.7],"",71]]],[20,"_0012_Layer-6.png","","",[90.0,67.0],"",4,[[1,[0.0,1.0],"",[-0.05235987755982989,0.05235987755982989]],[1,[1.0,2.3],"",[0.05235987755982989,-0.05235987755982989]],[1,[2.3,3.6],"",[-0.05235987755982989,0.05235987755982989]],[1,[3.6,5.0],"",[0.05235987755982989,-0.05235987755982989]],[1,[5.0],"",[-0.05235987755982989]],[2,[],"",[1.2]],[4,[0.0,1.0],"",76],[4,[1.0,2.3],"",76],[4,[2.3,5.0],"",76],[4,[5.0],"",76]]],[21,"_0011_Layer-3.png","","",[201.0,289.0],"",4,[[1,[0.0,0.8],"",[-0.03490658503988659,0.03490658503988659]],[1,[0.8,2.1],"",[0.03490658503988659,-0.03490658503988659]],[1,[2.1,3.5],"",[-0.03490658503988659,0.03490658503988659]],[1,[3.5,5.0],"",[0.03490658503988659,-0.03490658503988659]],[1,[5.0],"",[-0.03490658503988659]],[2,[],"",[1.2]],[4,[0.0,0.8],"",77],[4,[0.8,2.1],"",77],[4,[2.1,5.0],"",77],[4,[5.0],"",77]]],[22,"_0013_Layer-4.png","","",[81.0,489.0],"",4,[[1,[0.0,1.0],"",[0.017453292519943295,-0.017453292519943295]],[1,[1.0,2.5],"",[-0.017453292519943295,0.017453292519943295]],[1,[2.5,3.7],"",[0.017453292519943295,-0.017453292519943295]],[1,[3.7,5.0],"",[-0.017453292519943295,0.017453292519943295]],[1,[5.0],"",[0.017453292519943295]],[2,[],"",[1.09]],[4,[0.0,1.0],"",78],[4,[1.0,2.5],"",78],[4,[2.5,5.0],"",78],[4,[5.0],"",78]]],[23,"_0015_Layer-2.png","","",[111.0,456.0],"",4,[[1,[0.0,1.0],"",[-0.03490658503988659,0.03490658503988659]],[1,[1.0,2.4],"",[0.03490658503988659,-0.03490658503988659]],[1,[2.4,3.5],"",[-0.03490658503988659,0.03490658503988659]],[1,[3.5,5.0],"",[0.03490658503988659,-0.03490658503988659]],[1,[5.0],"",[-0.03490658503988659]],[2,[0.0,1.0],"",[1.17]],[2,[1.0,2.4],"",[1.17]],[2,[2.4,3.5],"",[1.17]],[2,[3.5,5.0],"",[1.17]],[2,[5.0],"",[1.17]],[4,[0.0,1.0],"",79],[4,[1.0,2.4],"",79],[4,[2.4,3.5],"",79],[4,[3.5,5.0],"",79],[4,[5.0],"",79]]],[24,"_0014_Layer-5.png","","",[90.0,455.0],"",4,[[1,[0.0,1.2],"",[0.03490658503988659,-0.03490658503988659]],[1,[1.2,2.4],"",[-0.03490658503988659,0.03490658503988659]],[1,[2.4,3.8],"",[0.03490658503988659,-0.03490658503988659]],[1,[3.8,5.0],"",[-0.03490658503988659,0.03490658503988659]],[1,[5.0],"",[0.03490658503988659]],[2,[],"",[1.2]],[4,[0.0,1.2],"",80],[4,[1.2,2.4],"",80],[4,[2.4,5.0],"",80],[4,[5.0],"",80]]],[25,"_0017_Layer-17.png Copy 2","","",[107.0,31.0],"",4,[[2,[],"",[0.885]],[4,[0.0,2.5],"",81],[4,[2.5,5.0],"",82],[4,[5.0],"",83]]],[26,"_0017_Layer-17.png Copy 1","","",[107.0,31.0],"",4,[[2,[],"",[0.549]],[4,[0.0,2.5],"",84],[4,[2.5,5.0],"",85],[4,[5.0],"",86]]],[27,"_0019_Layer-15.png","","",[800.0,384.0],"",4,[[2,[],"",[1.2,1.4]],[4,[],"",87]]]]],[1,"",[[2,"bker_0004_Layer-5.png","","",[33.0,44.0],"",4,[[1,[0.0,0.8],"",[0.0,0.2617993877991494]],[1,[0.8,1.5],"",[0.2617993877991494,0.06981317007977318]],[1,[1.5,2.3],"",[0.06981317007977318,0.0]],[1,[2.3,3.1],"",[0.0,0.2617993877991494]],[1,[3.1,3.8],"",[0.2617993877991494,0.06981317007977318]],[1,[3.8],"",[0.06981317007977318]],[2,[],"",[-1.0,1.0]],[4,[0.0,0.8],"",7],[4,[0.8,1.5],"",7],[4,[1.5,2.3],"",7],[4,[2.3],"",7]]],[3,"bker_0000_Layer-1.png","","",[35.0,0.0],"",4,[[1,[0.0,1.1],"",[0.0,0.12217304763960307]],[1,[1.1,2.0],"",[0.12217304763960307,0.0]],[1,[2.0,3.1],"",[0.0,0.12217304763960307]],[1,[3.1,3.6],"",[0.12217304763960307,0.0]],[1,[3.6,4.7],"",[0.0,0.12217304763960307]],[1,[4.7],"",[0.12217304763960307]],[2,[],"",[-1.0,1.0]],[4,[0.0,1.1],"",8],[4,[1.1,2.0],"",8],[4,[2.0,3.6],"",8],[4,[3.6],"",8]]],[4,"bker_0001_Layer-2.png","","",[16.0,21.0],"",4,[[2,[],"",[-1.0,1.0]],[4,[0.0,0.9],"",9],[4,[0.9,2.0],"",10],[4,[2.0,2.9],"",9],[4,[2.9,3.5],"",10],[4,[3.5,4.4],"",9],[4,[4.4],"",11]]],[5,"bker_0002_Layer-3.png","","",[20.0,16.0],"",4,[[2,[],"",[-1.0,1.0]],[4,[],"",12]]],[6,"bker_0003_Layer-4.png","","",[21.0,0.0],"",4,[[1,[0.0,0.4],"",[1.0122909661567112,0.19198621771937624]],[1,[0.4,1.0],"",[0.19198621771937624]],[1,[1.0,1.6],"",[0.19198621771937624,0.7155849933176751]],[1,[1.6,2.1],"",[0.7155849933176751,0.0]],[1,[2.1,2.7],"",[0.0,0.3490658503988659]],[1,[2.7,3.3],"",[0.3490658503988659,0.7853981633974483]],[1,[3.3,3.9],"",[0.7853981633974483,0.29670597283903605]],[1,[3.9],"",[0.29670597283903605]],[2,[],"",[-1.0,1.0]],[3,[0.0,0.4],"",[0.0]],[3,[0.4,1.0],"",[0.0]],[3,[1.0,1.6],"",[0.0]],[3,[1.6,2.1],"",[0.0]],[3,[2.1,2.7],"",[0.0]],[3,[2.7,3.3],"",[0.0]],[3,[3.3,3.9],"",[0.0]],[3,[3.9],"",[0.0]],[4,[0.0,0.4],"",13],[4,[0.4,1.0],"",14],[4,[1.0,1.6],"",15],[4,[1.6,2.1],"",16],[4,[2.1,2.7],"",17],[4,[2.7,3.3],"",18],[4,[3.3,3.9],"",19],[4,[3.9],"",20]]],[7,"_0001_Layer-2.png","","",[11.0,17.0],"",4,[[1,[0.0,4.0],"",[0.0,16.755160819145562]],[1,[4.0],"",[16.755160819145562]],[4,[],"",21]]],[8,"_0002_Layer-3.png","","",[71.0,45.0],"",4,[[2,[],"",[1.0,0.67]],[4,[],"",22]]],[9,"_0000_Layer-1.png Copy 1","","",[33.0,33.0],"",4,[[1,[0.0,4.0],"",[0.0,16.755160819145562]],[1,[4.0],"",[16.755160819145562]],[4,[],"",23]]],[10,"_0000_Layer-1.png","","",[33.0,33.0],"",4,[[1,[0.0,4.0],"",[0.0,16.755160819145562]],[1,[4.0],"",[16.755160819145562]],[4,[],"",24]]]],"",""],[8,"animation_images/135ab456fef53133ae8e6e5e.png",[66.0,44.0]],[8,"animation_images/145ab4560434fab954360d98.png",[35.0,24.0]],[8,"animation_images/155ab456042c66dc53234106.png",[32.0,43.0]],[8,"animation_images/165ab4561e2af543e75980cc.png",[40.0,32.0]],[8,"animation_images/135ab4566d1b3cff51970b6f.png",[21.0,42.0]],[8,"animation_images/3757b456e825632521118985.png",[22.0,35.0]],[8,"animation_images/3957b4560386d90a95b005e4.png",[142.0,91.0]],[8,"animation_images/3a57b456b4fd392a6216881c.png",[66.0,66.0]],[8,"animation_images/3a57b456b4fd392a6216881c.png",[66.0,66.0]],[8,"animation_images/d710af56b4731c3546d9e638.png",[338.0,78.0]],[8,"animation_images/de10af56ab3111a8a91e4e0d.png",[181.0,177.0]],[8,"animation_images/dd10af566101a106c176c081.png",[215.0,63.0]],[8,"animation_images/db10af5670bd4e4fa8f86c43.png",[1600.0,426.0]],[1,"",[[16,"_0003_Layer-4.png","","",[48.0,44.0],"",4,[[4,[],"",72]]],[17,"_0000_Layer-1.png","","",[6.0,6.0],"",4,[[2,[0.0,0.3],"",[1.0,1.0,1.05,1.05]],[2,[0.3,0.6],"",[1.05,1.05,1.0,1.0]],[2,[0.6,0.9],"",[1.0,1.0,1.05,1.05]],[2,[0.9,1.2],"",[1.05,1.05,1.0,1.0]],[2,[1.2,1.5],"",[1.0,1.0,1.05,1.05]],[2,[1.5,1.8],"",[1.05,1.05,1.0,1.0]],[2,[1.8,2.1],"",[1.0,1.0,1.05,1.05]],[2,[2.1,2.4],"",[1.05,1.05,1.0,1.0]],[2,[2.4,2.7],"",[1.0,1.0,1.05,1.05]],[2,[2.7,3.0],"",[1.05,1.05,1.0,1.0]],[2,[3.0,3.3],"",[1.0,1.0,1.05,1.05]],[2,[3.3,3.6],"",[1.05,1.05,1.0,1.0]],[2,[3.6,3.9],"",[1.0,1.0,1.05,1.05]],[2,[3.9,4.2],"",[1.05,1.05,1.0,1.0]],[2,[4.2,4.5],"",[1.0,1.0,1.05,1.05]],[2,[4.5,4.7],"",[1.05,1.05,1.0,1.0]],[2,[4.7],"",[1.0]],[4,[0.0,0.3],"",73],[4,[0.3,0.6],"",73],[4,[0.6,1.2],"",73],[4,[1.2,1.8],"",73],[4,[1.8,2.4],"",73],[4,[2.4,3.0],"",73],[4,[3.0,3.6],"",73],[4,[3.6,4.2],"",73],[4,[4.2,4.7],"",73],[4,[4.7],"",73]]],[18,"_0001_Layer-2.png","","",[10.0,10.0],"",4,[[2,[0.0,0.2],"",[1.0,1.0,1.2,1.2]],[2,[0.2,0.5],"",[1.2,1.2,1.0,1.0]],[2,[0.5,0.7],"",[1.0,1.0,1.2,1.2]],[2,[0.7,1.0],"",[1.2,1.2,1.0,1.0]],[2,[1.0,1.2],"",[1.0,1.0,1.2,1.2]],[2,[1.2,1.5],"",[1.2,1.2,1.0,1.0]],[2,[1.5,1.7],"",[1.0,1.0,1.2,1.2]],[2,[1.7,1.9],"",[1.2,1.2,1.0,1.0]],[2,[1.9,2.1],"",[1.0,1.0,1.2,1.2]],[2,[2.1,2.3],"",[1.2,1.2,1.0,1.0]],[2,[2.3,2.5],"",[1.0,1.0,1.2,1.2]],[2,[2.5,2.7],"",[1.2,1.2,1.0,1.0]],[2,[2.7,2.9],"",[1.0,1.0,1.2,1.2]],[2,[2.9,3.2],"",[1.2,1.2,1.0,1.0]],[2,[3.2,3.4],"",[1.0,1.0,1.2,1.2]],[2,[3.4,3.6],"",[1.2,1.2,1.0,1.0]],[2,[3.6,3.8],"",[1.0,1.0,1.2,1.2]],[2,[3.8,4.1],"",[1.2,1.2,1.0,1.0]],[2,[4.1,4.3],"",[1.0,1.0,1.2,1.2]],[2,[4.3,4.5],"",[1.2,1.2,1.0,1.0]],[2,[4.5,4.7],"",[1.0,1.0,1.2,1.2]],[2,[4.7,4.9],"",[1.2,1.2,1.0,1.0]],[2,[4.9],"",[1.0]],[4,[0.0,0.2],"",74],[4,[0.2,0.5],"",74],[4,[0.5,1.0],"",74],[4,[1.0,1.5],"",74],[4,[1.5,1.9],"",74],[4,[1.9,2.3],"",74],[4,[2.3,2.7],"",74],[4,[2.7,3.2],"",74],[4,[3.2,3.6],"",74],[4,[3.6,4.1],"",74],[4,[4.1,4.5],"",74],[4,[4.5,4.9],"",74],[4,[4.9],"",74]]],[19,"_0002_Layer-3.png","","",[34.0,0.0],"",4,[[2,[0.0,0.3],"",[1.1,1.1,1.4,1.4]],[2,[0.3,0.7],"",[1.4,1.4,1.1,1.1]],[2,[0.7,1.0],"",[1.1,1.1,1.4,1.4]],[2,[1.0,1.4],"",[1.4,1.4,1.1,1.1]],[2,[1.4,1.7],"",[1.1,1.1,1.4,1.4]],[2,[1.7,2.1],"",[1.4,1.4,1.1,1.1]],[2,[2.1,2.4],"",[1.1,1.1,1.4,1.4]],[2,[2.4,2.8],"",[1.4,1.4,1.1,1.1]],[2,[2.8,3.1],"",[1.1,1.1,1.4,1.4]],[2,[3.1,3.5],"",[1.4,1.4,1.1,1.1]],[2,[3.5,3.8],"",[1.1,1.1,1.4,1.4]],[2,[3.8,4.2],"",[1.4,1.4,1.1,1.1]],[2,[4.2,4.5],"",[1.1,1.1,1.4,1.4]],[2,[4.5,4.8],"",[1.4,1.4,1.0,1.0]],[2,[4.8],"",[1.0]],[4,[0.0,0.3],"",75],[4,[0.3,0.7],"",75],[4,[0.7,1.4],"",75],[4,[1.4,2.1],"",75],[4,[2.1,2.8],"",75],[4,[2.8,3.5],"",75],[4,[3.5,4.2],"",75],[4,[4.2,4.8],"",75],[4,[4.8],"",75]]]],"",""],[8,"animation_images/4a55b45663cf56bf30fb649b.png",[96.0,87.0]],[8,"animation_images/4855b4567105d8bcf68b2a51.png",[12.0,12.0]],[8,"animation_images/4955b456c37aa7b58b275d4f.png",[20.0,21.0]],[8,"animation_images/4955b456bf6b5154d6696cbf.png",[34.0,30.0]],[8,"animation_images/dc10af5618603df5e1bb2eff.png",[180.0,134.0]],[8,"animation_images/db10af56895376a79d9d9226.png",[402.0,288.0]],[8,"animation_images/dc10af5608b2d1c1458da547.png",[162.0,488.0]],[8,"animation_images/dd10af56890bf7f62bfbbb2a.png",[222.0,455.0]],[8,"animation_images/ca1caf562e996775e9e679be.png",[180.0,455.0]],[8,"animation_images/dd10af566101a106c176c081.png",[215.0,63.0]],[8,"animation_images/dd10af566101a106c176c081.png",[215.0,63.0]],[8,"animation_images/de10af565ac8a4abc1009c68.png",[1600.0,767.0]],[2,"$$$LIBRARY$$$",10.0,[]]],"scenes":[0]}};
    var player = anm.createPlayer(WRAPPER_ID, playerParams).load(animation, anm.importers.create('animatron'));
}

    window.addEventListener("load", start);