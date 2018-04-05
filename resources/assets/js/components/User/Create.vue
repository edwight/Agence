<template>
	<div class="inbox-body">
	                <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
	                    Compose
	                </a>
	                <!-- Modal -->
	                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
	                    <div class="modal-dialog">
	                        <div class="modal-content">
	                            <div class="modal-header">
	                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                                <h4 class="modal-title">Compose</h4>
	                            </div>
	                            <div class="modal-body">
	                                <form role="form" class="form-horizontal">
	                                    <div class="form-group">
	                                        <label class="col-lg-2 control-label">To</label>
	                                        <div class="col-lg-10">
	                                            <input type="text" placeholder="" id="inputEmail1" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label class="col-lg-2 control-label">Cc / Bcc</label>
	                                        <div class="col-lg-10">
	                                            <input type="text" placeholder="" id="cc" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label class="col-lg-2 control-label">Subject</label>
	                                        <div class="col-lg-10">
	                                            <input type="text" placeholder="" id="inputPassword1" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="form-group">
	                                        <label class="col-lg-2 control-label">Message</label>
	                                        <div class="col-lg-10">
	                                            <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
	                                        </div>
	                                    </div>

	                                    <div class="form-group">
	                                        <div class="col-lg-offset-2 col-lg-10">
	                                            <span class="btn green fileinput-button">
	                                              <i class="fa fa-plus fa fa-white"></i>
	                                              <span>Attachment</span>
	                                              <input type="file" name="files[]" multiple="">
	                                            </span>
	                                            <button class="btn btn-send" type="submit">Send</button>
	                                        </div>
	                                    </div>
	                                </form>
	                            </div>
	                        </div><!-- /.modal-content -->
	                    </div><!-- /.modal-dialog -->
	                </div><!-- /.modal -->
	</div>
</template>
<script>
	export default{
		
	}
</script>
