<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient', function(Blueprint $table) {
			$table->increments('patientID');
			$table->string('Prefix','5');
			$table->string('firstName',50)->nullable();
			$table->string('middleName',50)->nullable();
			$table->string('lastName',50);
			$table->date('birthdate');
			$table->integer('Age')->nullable();
			$table->string('Sex');


			$table->integer('socialSecurityNumber');
			$table->string('MaritalStatus')->nullable();
			$table->string('employmentStatus')->nullable();
			$table->string('studentStatus')->nullable();

			$table->string('InsurancedName')->nullable();
			$table->integer('InsuranceSecurityNumber')->nullable();
			$table->string('insurancedInformation')->nullable();
			$table->string('relationshipToInsurance')->nullable();



			$table->string('CareType');
			$table->string('CareFirstName')->nullable();
			$table->string('CareLastName');
			$table->integer('CareSocialSecurityNumbers');
			$table->string('HomeAddress')->nullable();
			$table->integer('CarePhoneNumber');
			$table->string('CareEmailAddress')->nullable();
			$table->text('CareExtraInformation')->nullable();

			

			$table->string('emailAddress')->nullable();
			$table->string('City');
			$table->string('State');
			$table->string('Conuntry');
			$table->integer('zipCode');
			$table->integer('homeNumber');
			$table->integer('phoneNumber');
			$table->text('PateintExtraInformation')->nullable();
			$table->dateTime('resgistedAt');
			$table->timestamps();
			});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patient');
	}

}
