package org.sdrc.cpmisweb.service;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.cwc.CwcDetails;
import org.sdrc.cpmisweb.domain.cwc.CwcDetailsTraining;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionA;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionB;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionC;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionD;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionE;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionF;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionG;
import org.sdrc.cpmisweb.domain.cwc.CwcSectionH;
import org.sdrc.cpmisweb.model.CwcModel;
import org.sdrc.cpmisweb.repository.CwcDetailsRepository;
import org.sdrc.cpmisweb.repository.CwcDetailsTrainingRepository;
import org.sdrc.cpmisweb.repository.CwcSectionARepository;
import org.sdrc.cpmisweb.repository.CwcSectionBRepository;
import org.sdrc.cpmisweb.repository.CwcSectionCRepository;
import org.sdrc.cpmisweb.repository.CwcSectionDRepository;
import org.sdrc.cpmisweb.repository.CwcSectionERepository;
import org.sdrc.cpmisweb.repository.CwcSectionFRepository;
import org.sdrc.cpmisweb.repository.CwcSectionGRepository;
import org.sdrc.cpmisweb.repository.CwcSectionHRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class CwcServiceImpl implements CwcService {

	@Autowired
	CwcDetailsRepository cwcDetailsRepository;
	@Autowired
	CwcSectionARepository cwcSectionARepository;
	@Autowired
	CwcSectionBRepository cwcSectionBRepository;
	@Autowired
	CwcSectionCRepository cwcSectionCRepository;
	@Autowired
	CwcSectionDRepository cwcSectionDRepository;
	@Autowired
 	CwcSectionERepository cwcSectionERepository;
	@Autowired
	CwcSectionFRepository cwcSectionFRepository;
	@Autowired
	CwcSectionGRepository cwcSectionGRepository;
	@Autowired
	CwcSectionHRepository cwcSectionHRepository;
	
	@Autowired
	CwcDetailsTrainingRepository cwcDetailsTrainingRepository;
	
	@Autowired
	TimePeriodRepository timePeriodRepository;
	
	@Autowired
	DozerBeanMapper mapper;

	@Override
	public void save(CwcModel cwcModel) {

		CwcDetails 	cwcDetails 	= mapper.map(cwcModel, CwcDetails.class);
		CwcSectionA cwcSectionA = mapper.map(cwcModel, CwcSectionA.class);
		CwcSectionB cwcSectionB = mapper.map(cwcModel, CwcSectionB.class);
		CwcSectionC cwcSectionC = mapper.map(cwcModel, CwcSectionC.class);
		CwcSectionD cwcSectionD = mapper.map(cwcModel, CwcSectionD.class);
		CwcSectionE cwcSectionE = mapper.map(cwcModel, CwcSectionE.class);
		CwcSectionF cwcSectionF = mapper.map(cwcModel, CwcSectionF.class);
		CwcSectionG cwcSectionG = mapper.map(cwcModel, CwcSectionG.class);
		CwcSectionH cwcSectionH = mapper.map(cwcModel, CwcSectionH.class);
		
		cwcSectionA.setCwcDetails(cwcDetails);
		cwcSectionB.setCwcDetails(cwcDetails);
		cwcSectionC.setCwcDetails(cwcDetails);
		cwcSectionD.setCwcDetails(cwcDetails);
		cwcSectionE.setCwcDetails(cwcDetails);
		cwcSectionF.setCwcDetails(cwcDetails);
		cwcSectionG.setCwcDetails(cwcDetails);
		cwcSectionH.setCwcDetails(cwcDetails);
		
		cwcDetails.setCwcSectionA(cwcSectionA);
		cwcDetails.setCwcSectionB(cwcSectionB);
		cwcDetails.setCwcSectionC(cwcSectionC);
		cwcDetails.setCwcSectionD(cwcSectionD);
		cwcDetails.setCwcSectionE(cwcSectionE);
		cwcDetails.setCwcSectionF(cwcSectionF);
		cwcDetails.setCwcSectionG(cwcSectionG);
		cwcDetails.setCwcSectionH(cwcSectionH);
		
		cwcDetailsRepository.save(cwcDetails);
		cwcSectionARepository.save(cwcSectionA);
		cwcSectionBRepository.save(cwcSectionB);
		cwcSectionCRepository.save(cwcSectionC);
		cwcSectionDRepository.save(cwcSectionD);
		cwcSectionERepository.save(cwcSectionE);
		cwcSectionFRepository.save(cwcSectionF);
		cwcSectionGRepository.save(cwcSectionG);
		cwcSectionHRepository.save(cwcSectionH);
		
		List<CwcDetailsTraining> cwcDetailsTrainings = cwcDetails.getCwcDetailsTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(CwcDetailsTraining cwcTraining : cwcDetailsTrainings){
			cwcTraining.setCwcId(cwcDetails);
		}
		cwcDetailsTrainingRepository.save(cwcDetailsTrainings);
		for(CwcDetailsTraining cwcTraining : cwcDetailsTrainings){
			remainingIds.add(cwcTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		cwcDetailsTrainingRepository.deleteByTrainingId(remainingIds, cwcDetails.getId());
	}
	
	@Override
	public CwcModel findLastSavedData(Integer userId){
		CwcModel model = new CwcModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = cwcDetailsRepository.findMaxTimePeriod(userId);
		if(null == timePeriodId){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(cwcDetailsRepository.findMaxTimePeriod(userId));
			CwcDetails cwcDetails = cwcDetailsRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(cwcDetails.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(cwcDetails, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(cwcDetails);
				}
			}else{//code for current month submitted form
				return getData(cwcDetails);
			}
		}
	}
	
	private CwcModel getData(CwcDetails cwcDetails){
		CwcModel model = new CwcModel();
		CwcSectionA cwcSectionA=null==cwcDetails.getCwcSectionA()?null:cwcSectionARepository.findByCwcSectionAId(cwcDetails.getCwcSectionA().getCwcSectionAId());
		CwcSectionB cwcSectionB=null==cwcDetails.getCwcSectionB()?null:cwcSectionBRepository.findByCwcSectionBId(cwcDetails.getCwcSectionB().getCwcSectionBId());
		CwcSectionC cwcSectionC=null==cwcDetails.getCwcSectionC()?null:cwcSectionCRepository.findByCwcSectionCId(cwcDetails.getCwcSectionC().getCwcSectionCId());
		CwcSectionD cwcSectionD=null==cwcDetails.getCwcSectionD()?null:cwcSectionDRepository.findByCwcSectionDId(cwcDetails.getCwcSectionD().getCwcSectionDId());
		CwcSectionE cwcSectionE=null==cwcDetails.getCwcSectionE()?null:cwcSectionERepository.findByCwcSectionEId(cwcDetails.getCwcSectionE().getCwcSectionEId());
		CwcSectionF cwcSectionF=null==cwcDetails.getCwcSectionF()?null:cwcSectionFRepository.findByCwcSectionFId(cwcDetails.getCwcSectionF().getCwcSectionFId());
		CwcSectionG cwcSectionG=null==cwcDetails.getCwcSectionG()?null:cwcSectionGRepository.findByCwcSectionGId(cwcDetails.getCwcSectionG().getCwcSectionGId());
		CwcSectionH cwcSectionH=null==cwcDetails.getCwcSectionH()?null:cwcSectionHRepository.findByCwcSectionHId(cwcDetails.getCwcSectionH().getCwcSectionHId());
		
		model = mapper.map(cwcDetails,  CwcModel.class);
	     			if(null != cwcSectionA)mapper.map(cwcSectionA, model);
	     			if(null != cwcSectionB)mapper.map(cwcSectionB, model);
	     			if(null != cwcSectionC)mapper.map(cwcSectionC, model);
	     			if(null != cwcSectionD)mapper.map(cwcSectionD, model);
	     			if(null != cwcSectionE)mapper.map(cwcSectionE, model);
	     			if(null != cwcSectionF)mapper.map(cwcSectionF, model);
	     			if(null != cwcSectionG)mapper.map(cwcSectionG, model);
	     			if(null != cwcSectionH)mapper.map(cwcSectionH, model);

		//the following line of code is for sorting the training details by trainingId(insertion order).
		model.getCwcDetailsTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
		for(CwcDetailsTraining cwcTraining : model.getCwcDetailsTrainings()){
			cwcTraining.setCwcId(null);
		}
		return model;
	}
	
	private CwcModel getSubmittedData(CwcDetails lmCwcDetails, Timeperiod userMaxTimePeriod){
		CwcSectionE cwcSectionE=null==lmCwcDetails?null:cwcSectionERepository.findByCwcSectionEId(lmCwcDetails.getCwcSectionE().getCwcSectionEId());
		CwcModel cwcModel = new CwcModel();
		if(null != cwcSectionE){
			cwcModel.setA1Boys0to6(cwcSectionE.getE10aBoys0to6());
			cwcModel.setA1Boys7to11(cwcSectionE.getE10aBoys7to11());
			cwcModel.setA1Boys12to15(cwcSectionE.getE10aBoys12to15());
			cwcModel.setA1Boys16to18(cwcSectionE.getE10aBoys16to18());
			cwcModel.setA1BoysGreaterThan18(cwcSectionE.getE10aBoysGreaterThan18());
			cwcModel.setA1BoysTotal(cwcSectionE.getE10aBoysTotal());
			cwcModel.setA1Girls0to6(cwcSectionE.getE10aGirls0to6());
			cwcModel.setA1Girls7to11(cwcSectionE.getE10aGirls7to11());
			cwcModel.setA1Girls12to15(cwcSectionE.getE10aGirls12to15());
			cwcModel.setA1Girls16to18(cwcSectionE.getE10aGirls16to18());
			cwcModel.setA1GirlsGreaterThan18(cwcSectionE.getE10aGirlsGreaterThan18());
			cwcModel.setA1GirlsTotal(cwcSectionE.getE10aGirlsTotal());
			cwcModel.setA1GrandTotal(cwcSectionE.getE10aGrandTotal());
			cwcModel.setA2Boys0to6(cwcSectionE.getE10bBoys0to6());
			cwcModel.setA2Boys7to11(cwcSectionE.getE10bBoys7to11());
			cwcModel.setA2Boys12to15(cwcSectionE.getE10bBoys12to15());
			cwcModel.setA2Boys16to18(cwcSectionE.getE10bBoys16to18());
			cwcModel.setA2BoysGreaterThan18(cwcSectionE.getE10bBoysGreaterThan18());
			cwcModel.setA2BoysTotal(cwcSectionE.getE10bBoysTotal());
			cwcModel.setA2Girls0to6(cwcSectionE.getE10bGirls0to6());
			cwcModel.setA2Girls7to11(cwcSectionE.getE10bGirls7to11());
			cwcModel.setA2Girls12to15(cwcSectionE.getE10bGirls12to15());
			cwcModel.setA2Girls16to18(cwcSectionE.getE10bGirls16to18());
			cwcModel.setA2GirlsGreaterThan18(cwcSectionE.getE10bGirlsGreaterThan18());
			cwcModel.setA2GirlsTotal(cwcSectionE.getE10bGirlsTotal());
			cwcModel.setA2GrandTotal(cwcSectionE.getE10bGrandTotal());
			cwcModel.setA3Boys0to6(cwcSectionE.getE10cBoys0to6());
			cwcModel.setA3Boys7to11(cwcSectionE.getE10cBoys7to11());
			cwcModel.setA3Boys12to15(cwcSectionE.getE10cBoys12to15());
			cwcModel.setA3Boys16to18(cwcSectionE.getE10cBoys16to18());
			cwcModel.setA3BoysGreaterThan18(cwcSectionE.getE10cBoysGreaterThan18());
			cwcModel.setA3BoysTotal(cwcSectionE.getE10cBoysTotal());
			cwcModel.setA3Girls0to6(cwcSectionE.getE10cGirls0to6());
			cwcModel.setA3Girls7to11(cwcSectionE.getE10cGirls7to11());
			cwcModel.setA3Girls12to15(cwcSectionE.getE10cGirls12to15());
			cwcModel.setA3Girls16to18(cwcSectionE.getE10cGirls16to18());
			cwcModel.setA3GirlsGreaterThan18(cwcSectionE.getE10cGirlsGreaterThan18());
			cwcModel.setA3GirlsTotal(cwcSectionE.getE10cGirlsTotal());
			cwcModel.setA3GrandTotal(cwcSectionE.getE10cGrandTotal());
			cwcModel.setA4Boys0to6(cwcSectionE.getE10dBoys0to6());
			cwcModel.setA4Boys7to11(cwcSectionE.getE10dBoys7to11());
			cwcModel.setA4Boys12to15(cwcSectionE.getE10dBoys12to15());
			cwcModel.setA4Boys16to18(cwcSectionE.getE10dBoys16to18());
			cwcModel.setA4BoysGreaterThan18(cwcSectionE.getE10dBoysGreaterThan18());
			cwcModel.setA4BoysTotal(cwcSectionE.getE10dBoysTotal());
			cwcModel.setA4Girls0to6(cwcSectionE.getE10dGirls0to6());
			cwcModel.setA4Girls7to11(cwcSectionE.getE10dGirls7to11());
			cwcModel.setA4Girls12to15(cwcSectionE.getE10dGirls12to15());
			cwcModel.setA4Girls16to18(cwcSectionE.getE10dGirls16to18());
			cwcModel.setA4GirlsGreaterThan18(cwcSectionE.getE10dGirlsGreaterThan18());
			cwcModel.setA4GirlsTotal(cwcSectionE.getE10dGirlsTotal());
			cwcModel.setA4GrandTotal(cwcSectionE.getE10dGrandTotal());
			cwcModel.setA5Boys0to6(cwcSectionE.getE10eBoys0to6());
			cwcModel.setA5Boys7to11(cwcSectionE.getE10eBoys7to11());
			cwcModel.setA5Boys12to15(cwcSectionE.getE10eBoys12to15());
			cwcModel.setA5Boys16to18(cwcSectionE.getE10eBoys16to18());
			cwcModel.setA5BoysGreaterThan18(cwcSectionE.getE10eBoysGreaterThan18());
			cwcModel.setA5BoysTotal(cwcSectionE.getE10eBoysTotal());
			cwcModel.setA5Girls0to6(cwcSectionE.getE10eGirls0to6());
			cwcModel.setA5Girls7to11(cwcSectionE.getE10eGirls7to11());
			cwcModel.setA5Girls12to15(cwcSectionE.getE10eGirls12to15());
			cwcModel.setA5Girls16to18(cwcSectionE.getE10eGirls16to18());
			cwcModel.setA5GirlsGreaterThan18(cwcSectionE.getE10eGirlsGreaterThan18());
			cwcModel.setA5GirlsTotal(cwcSectionE.getE10eGirlsTotal());
			cwcModel.setA5GrandTotal(cwcSectionE.getE10eGrandTotal());
			cwcModel.setA6Boys0to6(cwcSectionE.getE10fBoys0to6());////////////////////////////
			cwcModel.setA6Boys7to11(cwcSectionE.getE10fBoys7to11());
			cwcModel.setA6Boys12to15(cwcSectionE.getE10fBoys12to15());
			cwcModel.setA6Boys16to18(cwcSectionE.getE10fBoys16to18());
			cwcModel.setA6BoysGreaterThan18(cwcSectionE.getE10fBoysGreaterThan18());
			cwcModel.setA6BoysTotal(cwcSectionE.getE10fBoysTotal());
			cwcModel.setA6Girls0to6(cwcSectionE.getE10fGirls0to6());
			cwcModel.setA6Girls7to11(cwcSectionE.getE10fGirls7to11());
			cwcModel.setA6Girls12to15(cwcSectionE.getE10fGirls12to15());
			cwcModel.setA6Girls16to18(cwcSectionE.getE10fGirls16to18());
			cwcModel.setA6GirlsGreaterThan18(cwcSectionE.getE10fGirlsGreaterThan18());
			cwcModel.setA6GirlsTotal(cwcSectionE.getE10fGirlsTotal());
			cwcModel.setA6GrandTotal(cwcSectionE.getE10fGrandTotal());
			cwcModel.setA7Boys0to6(cwcSectionE.getE10gBoys0to6());//////////////////////////////
			cwcModel.setA7Boys7to11(cwcSectionE.getE10gBoys7to11());
			cwcModel.setA7Boys12to15(cwcSectionE.getE10gBoys12to15());
			cwcModel.setA7Boys16to18(cwcSectionE.getE10gBoys16to18());
			cwcModel.setA7BoysGreaterThan18(cwcSectionE.getE10gBoysGreaterThan18());
			cwcModel.setA7BoysTotal(cwcSectionE.getE10gBoysTotal());
			cwcModel.setA7Girls0to6(cwcSectionE.getE10gGirls0to6());
			cwcModel.setA7Girls7to11(cwcSectionE.getE10gGirls7to11());
			cwcModel.setA7Girls12to15(cwcSectionE.getE10gGirls12to15());
			cwcModel.setA7Girls16to18(cwcSectionE.getE10gGirls16to18());
			cwcModel.setA7GirlsGreaterThan18(cwcSectionE.getE10gGirlsGreaterThan18());
			cwcModel.setA7GirlsTotal(cwcSectionE.getE10gGirlsTotal());
			cwcModel.setA7GrandTotal(cwcSectionE.getE10gGrandTotal());
			
			cwcModel.setSubmitted(false);
		}
		cwcModel.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
		return cwcModel;
	}

//	@Override
//	public CwcModel findLastSavedData(Integer userId) {
//		
//		CPMISDate date = new CPMISDate();
//		Date firstDay = date.currentMonthFirstDate();
//		Date lastDay = date.currentMonthLastDate();
//		
//		CwcDetails cwcDetails = cwcDetailsRepository.findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(userId, firstDay, lastDay);
//		if(null != cwcDetails){
//			CwcModel model = new CwcModel();
//			if(!cwcDetails.isSubmitted() || (cwcDetails.getDateOfSubmimission().after(firstDay) && cwcDetails.getDateOfSubmimission().before(lastDay))){
//				if(null != cwcDetails.getLastSaveDate() && cwcDetails.getLastSaveDate().after(firstDay) && cwcDetails.getLastSaveDate().before(lastDay)){
//					CwcSectionA cwcSectionA=null==cwcDetails.getCwcSectionA()?null:cwcSectionARepository.findByCwcSectionAId(cwcDetails.getCwcSectionA().getCwcSectionAId());
//					CwcSectionB cwcSectionB=null==cwcDetails.getCwcSectionB()?null:cwcSectionBRepository.findByCwcSectionBId(cwcDetails.getCwcSectionB().getCwcSectionBId());
//					CwcSectionC cwcSectionC=null==cwcDetails.getCwcSectionC()?null:cwcSectionCRepository.findByCwcSectionCId(cwcDetails.getCwcSectionC().getCwcSectionCId());
//					CwcSectionD cwcSectionD=null==cwcDetails.getCwcSectionD()?null:cwcSectionDRepository.findByCwcSectionDId(cwcDetails.getCwcSectionD().getCwcSectionDId());
//					CwcSectionE cwcSectionE=null==cwcDetails.getCwcSectionE()?null:cwcSectionERepository.findByCwcSectionEId(cwcDetails.getCwcSectionE().getCwcSectionEId());
//					CwcSectionF cwcSectionF=null==cwcDetails.getCwcSectionF()?null:cwcSectionFRepository.findByCwcSectionFId(cwcDetails.getCwcSectionF().getCwcSectionFId());
//					CwcSectionG cwcSectionG=null==cwcDetails.getCwcSectionG()?null:cwcSectionGRepository.findByCwcSectionGId(cwcDetails.getCwcSectionG().getCwcSectionGId());
//					CwcSectionH cwcSectionH=null==cwcDetails.getCwcSectionH()?null:cwcSectionHRepository.findByCwcSectionHId(cwcDetails.getCwcSectionH().getCwcSectionHId());
//					
//					model = mapper.map(cwcDetails,  CwcModel.class);
//				     			if(null != cwcSectionA)mapper.map(cwcSectionA, model);
//				     			if(null != cwcSectionB)mapper.map(cwcSectionB, model);
//				     			if(null != cwcSectionC)mapper.map(cwcSectionC, model);
//				     			if(null != cwcSectionD)mapper.map(cwcSectionD, model);
//				     			if(null != cwcSectionE)mapper.map(cwcSectionE, model);
//				     			if(null != cwcSectionF)mapper.map(cwcSectionF, model);
//				     			if(null != cwcSectionG)mapper.map(cwcSectionG, model);
//				     			if(null != cwcSectionH)mapper.map(cwcSectionH, model);
//
//					//the following line of code is for sorting the training details by trainingId(insertion order).(Pratyush)
//					model.getCwcDetailsTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
//					for(CwcDetailsTraining cwcTraining : model.getCwcDetailsTrainings()){
//						cwcTraining.setCwcId(null);
//					}
//					return model;
//				}else
//					return null;
//			}
//			return model;
//		}
//		
//		else{
////			CPMISDate preDate = new CPMISDate();
////			Date firstDateOfPreviousMonth = preDate.previousMonthFirstDate();
////			Date lastDateOfPreviousMonth = preDate.previousMonthLastDate();
//			
////			CwcDetails lmCwcDetails = cwcDetailsRepository.findByUserIdAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(userId, firstDateOfPreviousMonth, lastDateOfPreviousMonth);
//			CwcDetails lmCwcDetails = cwcDetailsRepository.findLastReportingMonthSubmissionData(userId);
//			
//			CwcSectionE cwcSectionE=null==lmCwcDetails?null:cwcSectionERepository.findByCwcSectionEId(lmCwcDetails.getCwcSectionE().getCwcSectionEId());
//			CwcModel cwcModel = new CwcModel();
//			if(null != cwcSectionE){
//				cwcModel.setA1Boys0to6(cwcSectionE.getE10aBoys0to6());
//				cwcModel.setA1Boys7to11(cwcSectionE.getE10aBoys7to11());
//				cwcModel.setA1Boys12to15(cwcSectionE.getE10aBoys12to15());
//				cwcModel.setA1Boys16to18(cwcSectionE.getE10aBoys16to18());
//				cwcModel.setA1BoysGreaterThan18(cwcSectionE.getE10aBoysGreaterThan18());
//				cwcModel.setA1BoysTotal(cwcSectionE.getE10aBoysTotal());
//				cwcModel.setA1Girls0to6(cwcSectionE.getE10aGirls0to6());
//				cwcModel.setA1Girls7to11(cwcSectionE.getE10aGirls7to11());
//				cwcModel.setA1Girls12to15(cwcSectionE.getE10aGirls12to15());
//				cwcModel.setA1Girls16to18(cwcSectionE.getE10aGirls16to18());
//				cwcModel.setA1GirlsGreaterThan18(cwcSectionE.getE10aGirlsGreaterThan18());
//				cwcModel.setA1GirlsTotal(cwcSectionE.getE10aGirlsTotal());
//				cwcModel.setA1GrandTotal(cwcSectionE.getE10aGrandTotal());
//				cwcModel.setA2Boys0to6(cwcSectionE.getE10bBoys0to6());
//				cwcModel.setA2Boys7to11(cwcSectionE.getE10bBoys7to11());
//				cwcModel.setA2Boys12to15(cwcSectionE.getE10bBoys12to15());
//				cwcModel.setA2Boys16to18(cwcSectionE.getE10bBoys16to18());
//				cwcModel.setA2BoysGreaterThan18(cwcSectionE.getE10bBoysGreaterThan18());
//				cwcModel.setA2BoysTotal(cwcSectionE.getE10bBoysTotal());
//				cwcModel.setA2Girls0to6(cwcSectionE.getE10bGirls0to6());
//				cwcModel.setA2Girls7to11(cwcSectionE.getE10bGirls7to11());
//				cwcModel.setA2Girls12to15(cwcSectionE.getE10bGirls12to15());
//				cwcModel.setA2Girls16to18(cwcSectionE.getE10bGirls16to18());
//				cwcModel.setA2GirlsGreaterThan18(cwcSectionE.getE10bGirlsGreaterThan18());
//				cwcModel.setA2GirlsTotal(cwcSectionE.getE10bGirlsTotal());
//				cwcModel.setA2GrandTotal(cwcSectionE.getE10bGrandTotal());
//				cwcModel.setA3Boys0to6(cwcSectionE.getE10cBoys0to6());
//				cwcModel.setA3Boys7to11(cwcSectionE.getE10cBoys7to11());
//				cwcModel.setA3Boys12to15(cwcSectionE.getE10cBoys12to15());
//				cwcModel.setA3Boys16to18(cwcSectionE.getE10cBoys16to18());
//				cwcModel.setA3BoysGreaterThan18(cwcSectionE.getE10cBoysGreaterThan18());
//				cwcModel.setA3BoysTotal(cwcSectionE.getE10cBoysTotal());
//				cwcModel.setA3Girls0to6(cwcSectionE.getE10cGirls0to6());
//				cwcModel.setA3Girls7to11(cwcSectionE.getE10cGirls7to11());
//				cwcModel.setA3Girls12to15(cwcSectionE.getE10cGirls12to15());
//				cwcModel.setA3Girls16to18(cwcSectionE.getE10cGirls16to18());
//				cwcModel.setA3GirlsGreaterThan18(cwcSectionE.getE10cGirlsGreaterThan18());
//				cwcModel.setA3GirlsTotal(cwcSectionE.getE10cGirlsTotal());
//				cwcModel.setA3GrandTotal(cwcSectionE.getE10cGrandTotal());
//				cwcModel.setA4Boys0to6(cwcSectionE.getE10dBoys0to6());
//				cwcModel.setA4Boys7to11(cwcSectionE.getE10dBoys7to11());
//				cwcModel.setA4Boys12to15(cwcSectionE.getE10dBoys12to15());
//				cwcModel.setA4Boys16to18(cwcSectionE.getE10dBoys16to18());
//				cwcModel.setA4BoysGreaterThan18(cwcSectionE.getE10dBoysGreaterThan18());
//				cwcModel.setA4BoysTotal(cwcSectionE.getE10dBoysTotal());
//				cwcModel.setA4Girls0to6(cwcSectionE.getE10dGirls0to6());
//				cwcModel.setA4Girls7to11(cwcSectionE.getE10dGirls7to11());
//				cwcModel.setA4Girls12to15(cwcSectionE.getE10dGirls12to15());
//				cwcModel.setA4Girls16to18(cwcSectionE.getE10dGirls16to18());
//				cwcModel.setA4GirlsGreaterThan18(cwcSectionE.getE10dGirlsGreaterThan18());
//				cwcModel.setA4GirlsTotal(cwcSectionE.getE10dGirlsTotal());
//				cwcModel.setA4GrandTotal(cwcSectionE.getE10dGrandTotal());
//				cwcModel.setA5Boys0to6(cwcSectionE.getE10eBoys0to6());
//				cwcModel.setA5Boys7to11(cwcSectionE.getE10eBoys7to11());
//				cwcModel.setA5Boys12to15(cwcSectionE.getE10eBoys12to15());
//				cwcModel.setA5Boys16to18(cwcSectionE.getE10eBoys16to18());
//				cwcModel.setA5BoysGreaterThan18(cwcSectionE.getE10eBoysGreaterThan18());
//				cwcModel.setA5BoysTotal(cwcSectionE.getE10eBoysTotal());
//				cwcModel.setA5Girls0to6(cwcSectionE.getE10eGirls0to6());
//				cwcModel.setA5Girls7to11(cwcSectionE.getE10eGirls7to11());
//				cwcModel.setA5Girls12to15(cwcSectionE.getE10eGirls12to15());
//				cwcModel.setA5Girls16to18(cwcSectionE.getE10eGirls16to18());
//				cwcModel.setA5GirlsGreaterThan18(cwcSectionE.getE10eGirlsGreaterThan18());
//				cwcModel.setA5GirlsTotal(cwcSectionE.getE10eGirlsTotal());
//				cwcModel.setA5GrandTotal(cwcSectionE.getE10eGrandTotal());
//				cwcModel.setA6Boys0to6(cwcSectionE.getE10fBoys0to6());
//				cwcModel.setA6Boys7to11(cwcSectionE.getE10fBoys7to11());
//				cwcModel.setA6Boys12to15(cwcSectionE.getE10fBoys12to15());
//				cwcModel.setA6Boys16to18(cwcSectionE.getE10fBoys16to18());
//				cwcModel.setA6BoysGreaterThan18(cwcSectionE.getE10fBoysGreaterThan18());
//				cwcModel.setA6BoysTotal(cwcSectionE.getE10fBoysTotal());
//				cwcModel.setA6Girls0to6(cwcSectionE.getE10fGirls0to6());
//				cwcModel.setA6Girls7to11(cwcSectionE.getE10fGirls7to11());
//				cwcModel.setA6Girls12to15(cwcSectionE.getE10fGirls12to15());
//				cwcModel.setA6Girls16to18(cwcSectionE.getE10fGirls16to18());
//				cwcModel.setA6GirlsGreaterThan18(cwcSectionE.getE10fGirlsGreaterThan18());
//				cwcModel.setA6GirlsTotal(cwcSectionE.getE10fGirlsTotal());
//				cwcModel.setA6GrandTotal(cwcSectionE.getE10fGrandTotal());
//				cwcModel.setA7Boys0to6(cwcSectionE.getE10fBoys0to6());
//				cwcModel.setA7Boys7to11(cwcSectionE.getE10fBoys7to11());
//				cwcModel.setA7Boys12to15(cwcSectionE.getE10fBoys12to15());
//				cwcModel.setA7Boys16to18(cwcSectionE.getE10fBoys16to18());
//				cwcModel.setA7BoysGreaterThan18(cwcSectionE.getE10fBoysGreaterThan18());
//				cwcModel.setA7BoysTotal(cwcSectionE.getE10fBoysTotal());
//				cwcModel.setA7Girls0to6(cwcSectionE.getE10fGirls0to6());
//				cwcModel.setA7Girls7to11(cwcSectionE.getE10fGirls7to11());
//				cwcModel.setA7Girls12to15(cwcSectionE.getE10fGirls12to15());
//				cwcModel.setA7Girls16to18(cwcSectionE.getE10fGirls16to18());
//				cwcModel.setA7GirlsGreaterThan18(cwcSectionE.getE10fGirlsGreaterThan18());
//				cwcModel.setA7GirlsTotal(cwcSectionE.getE10fGirlsTotal());
//				cwcModel.setA7GrandTotal(cwcSectionE.getE10fGrandTotal());
//				cwcModel.setA8Boys0to6(cwcSectionE.getE10gBoys0to6());
//				cwcModel.setA8Boys7to11(cwcSectionE.getE10gBoys7to11());
//				cwcModel.setA8Boys12to15(cwcSectionE.getE10gBoys12to15());
//				cwcModel.setA8Boys16to18(cwcSectionE.getE10gBoys16to18());
//				cwcModel.setA8BoysGreaterThan18(cwcSectionE.getE10gBoysGreaterThan18());
//				cwcModel.setA8BoysTotal(cwcSectionE.getE10gBoysTotal());
//				cwcModel.setA8Girls0to6(cwcSectionE.getE10gGirls0to6());
//				cwcModel.setA8Girls7to11(cwcSectionE.getE10gGirls7to11());
//				cwcModel.setA8Girls12to15(cwcSectionE.getE10gGirls12to15());
//				cwcModel.setA8Girls16to18(cwcSectionE.getE10gGirls16to18());
//				cwcModel.setA8GirlsGreaterThan18(cwcSectionE.getE10gGirlsGreaterThan18());
//				cwcModel.setA8GirlsTotal(cwcSectionE.getE10gGirlsTotal());
//				cwcModel.setA8GrandTotal(cwcSectionE.getE10gGrandTotal());
//				
//				cwcModel.setSubmitted(false);
//			}
//			return cwcModel;
//		}
//	}

}
