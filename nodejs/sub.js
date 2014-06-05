var bs = require('nodestalker'),
    client = bs.Client(),
    tube = 'testtube';

client.watch(tube).onSuccess(function(data) {
    function resJob() {
        client.reserve().onSuccess(function(job) {

            var json = JSON.parse(job.data);
            console.log("id:"+json.id+"_"+"data:"+json.data);

            client.deleteJob(job.id).onSuccess(function(del_msg) {
                //console.log('deleted', job);
                //console.log('message', del_msg);
                resJob();
            });
        });
    }

    resJob();
});
