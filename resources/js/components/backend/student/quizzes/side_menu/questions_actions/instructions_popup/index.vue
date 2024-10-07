<template>
    <div class="instructions_popup">
       <div class="modal fade" id="instructionsModal" tabindex="-1" role="dialog" aria-labelledby="instructionsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="instructionsModalLabel">Instructions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel panel-custom col-md-12" >
		<div class="panel-heading col-md-12 inst_head">
			<h3 class="text-primary"><strong>Instructions:</strong><span class="pull-right text-italic"> Please read these instructions carefully  </span></h3>

		</div>
		<div class="panel-body instruction no-arrow">
			<div class="">
				<div class="col-md-12">
					<h4>Exam name: {{quiz_name}} </h4>
					<h4>General Instructions:</h4>
					<p><strong>Please read these instructions carefully.</strong> A candidate who breaches any of the Examination Regulations will be liable to disciplinary action including (but not limited to) suspension or expulsion from the University.</p>

					<p><strong>Timings</strong></p>

					<p> Examinations will be conducted during the allocated times shown in the examination timetable.</p>

					<p> The examination hall will be open for admission <strong>10 minutes </strong>before the time scheduled for the commencement of the examination. You are to find your allocated seat but do <strong>NOT </strong>turn over the question paper until instructed at the time of commencement of the examination.</p>

					<p> You will not be admitted for the examination after <strong>one hour</strong> of the commencement of the examination.</p>

					<p><strong>Personal Belongings</strong></p>

					<ul class="remove_spacing">
						<li>All your personal belongings (such as bags, pouches, ear/headphones, laptops etc.) must be placed at the designated area outside the examination hall. Please do not bring any valuable belongings except the essential materials required for the examinations.
						<ul class="remove_spacing">
							<li>Any unauthorised materials, such as books, paper, documents, pictures and electronic devices with communication and/or storage capabilities such as tablet PC, laptop, smart watch, portable audio/video/gaming devices etc. are not to be brought into the examination hall.</li>
						</ul>
						</li>
					</ul>
					<p><strong>Handphones brought into the examination hall must be switched off at ALL times.</strong> If your handphone is found to be switched on in the examination hall, the handphone will be confiscated and retained for investigation of possible violation of regulations.</p>

					<p> Photography is<strong>NOT</strong> allowed in the examination hall at<strong>ALL </strong>times.</p>

					<p> All materials and/or devices which are found in violation of any examination regulations will be confiscated.</p>

					<p> The University will not be responsible for the loss or damage of any belongings in or outside the examination hall.</p>

					<p><strong>At the Start of the Examination</strong></p>

					<p><strong>Do NOT </strong>turn over the question paper placed on your desk until instructed to do so at the time of commencement of the examination.</p>

					<p> Please place your identification documents (such as matric card, identity card, passport, driving licence or EZ-Link concession card) at the top right corner of your examination desk for the marking of attendance and verification of identity during the examination.</p>

					<p> Please check that you have the correct question paper and read the instructions printed on your examination question paper carefully.</p>

					<p> All examinations are anonymous. Therefore, do not write your name on the answer book. You should write only your matriculation number, correctly and legibly, in the space provided on the cover of each answer book. Providing incorrect/illegible matriculation number could risk your answer book being considered void.</p>

					<p><strong>During Examination</strong></p>

					<ul class="remove_spacing">
						<li>You are not allowed to communicate by word of mouth or otherwise with other candidates (this includes the time when answer scripts are being collected).</li>
						<li>Please raise your hand if you wish to communicate with an invigilator.</li>
					</ul>

					<p> Unless granted permission by an invigilator, you are not allowed to leave your seat.</p>

					<ul class="remove_spacing">
						<li>Once you have entered the examination hall, you will not be allowed to leave the hall until<strong> one hour</strong>
						 after the examination has commenced. </li>
						<li>If, for any reason, you are given permission to leave the hall temporarily, you must be accompanied
						by an invigilator throughout your absence from the examination hall. <strong>You are required to leave
						 your </strong><strong>handphone on your desk when you leave the hall temporarily.</strong></li>
					</ul>

					<p> All answers, with the exception of graphs, sketches, diagrams, etc. should be written in black or blue pen, unless otherwise specified. Answers written in pencil will not be marked. The blank pages in the answer book are to be used only for candidates rough work. Solutions or any other materials written on these blank pages will not be marked.</p>

					<p> Do not write on, mark, highlight or deface any reference materials provided for the examination. If found doing so, the reference materials will be removed from your use for the rest of the examination and you will be made to pay for the cost of the materials that have to be replaced.</p>

					<p><strong>At the End of the Examination</strong></p>

					<p> You are <strong>NOT</strong> allowed to leave the examination hall during the last <strong>15 minutes</strong> of the examination and during the collection of the answer scripts. All candidates must remain seated throughout this period for invigilators to properly account for all answer scripts to be collected.</p>

					<p>Do <strong>NOT </strong>continue to write after the examination has ended. You are to <strong>remain seated quietly </strong>while your answer scripts are being collected and counted.</p>

					<p> No papers, used or unused, may be removed from the examination hall. You may take your own question paper with you unless otherwise instructed.</p>

					<p> You are to stay in the examination hall until the Chief Invigilator has given the permission to leave. Do <strong>NOT</strong> talk until you are outside of the examination hall.</p>

					<p> You are responsible to ensure that your answer scripts are submitted at the end of the examination. If you are present for the examination and do not submit your answer script, you will be deemed to have sat for and failed the examination concerned. Any unauthorised removal of answer script or part of answer script from the examination hall would deem the answer script as null and void.</p>

					<p> Once dismissed, you should leave the examination hall quickly and quietly .Remember to take your personal belongings with you.</p>
				</div>
			</div>
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </div>
</template>

<script>
export default {
    props:[
        'quiz_name'
    ]
}
</script>
