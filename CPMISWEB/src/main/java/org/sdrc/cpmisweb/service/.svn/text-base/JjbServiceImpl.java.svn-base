package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.jjb.JjbDetails;
import org.sdrc.cpmisweb.domain.jjb.JjbDetailsTraining;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionA;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionB;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionC;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionD;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionE;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionF;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionG;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionH;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionI;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionJ;
import org.sdrc.cpmisweb.domain.jjb.JjbSectionK;
import org.sdrc.cpmisweb.model.JjbModel;
import org.sdrc.cpmisweb.repository.JjbDetailsRepository;
import org.sdrc.cpmisweb.repository.JjbDetailsTrainingRepository;
import org.sdrc.cpmisweb.repository.JjbSectionARepository;
import org.sdrc.cpmisweb.repository.JjbSectionBRepository;
import org.sdrc.cpmisweb.repository.JjbSectionCRepository;
import org.sdrc.cpmisweb.repository.JjbSectionDRepository;
import org.sdrc.cpmisweb.repository.JjbSectionERepository;
import org.sdrc.cpmisweb.repository.JjbSectionFRepository;
import org.sdrc.cpmisweb.repository.JjbSectionGRepository;
import org.sdrc.cpmisweb.repository.JjbSectionHRepository;
import org.sdrc.cpmisweb.repository.JjbSectionIRepository;
import org.sdrc.cpmisweb.repository.JjbSectionJRepository;
import org.sdrc.cpmisweb.repository.JjbSectionKRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.sdrc.cpmisweb.util.CPMISDate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class JjbServiceImpl implements JjbService {

	@Autowired
	JjbDetailsRepository jjbDetailsRepository;
	
	@Autowired
	JjbDetailsTrainingRepository jjbDetailsTrainingRepository;
	@Autowired
	JjbSectionARepository jjbSectionARepository;
	@Autowired
	JjbSectionBRepository jjbSectionBRepository;
	@Autowired
	JjbSectionCRepository jjbSectionCRepository;
	@Autowired
	JjbSectionDRepository jjbSectionDRepository;
	@Autowired
	JjbSectionERepository jjbSectionERepository;
	@Autowired
	JjbSectionFRepository jjbSectionFRepository;
	@Autowired
	JjbSectionGRepository jjbSectionGRepository;
	@Autowired
	JjbSectionHRepository jjbSectionHRepository;
	@Autowired
	JjbSectionIRepository jjbSectionIRepository;
	@Autowired
	JjbSectionJRepository jjbSectionJRepository;
	@Autowired
	JjbSectionKRepository jjbSectionKRepository;
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Override
	public void save(JjbModel jjbModel) {

		JjbDetails jjbDetails = mapper.map(jjbModel, JjbDetails.class);
		
		JjbSectionA jjbSectionA=mapper.map(jjbModel, JjbSectionA.class);
		JjbSectionB jjbSectionB=mapper.map(jjbModel, JjbSectionB.class);
		JjbSectionC jjbSectionC=mapper.map(jjbModel, JjbSectionC.class);
		JjbSectionD jjbSectionD=mapper.map(jjbModel, JjbSectionD.class);
		JjbSectionE jjbSectionE=mapper.map(jjbModel, JjbSectionE.class);
		JjbSectionF jjbSectionF=mapper.map(jjbModel, JjbSectionF.class);
		JjbSectionG jjbSectionG=mapper.map(jjbModel, JjbSectionG.class);
		JjbSectionH jjbSectionH=mapper.map(jjbModel, JjbSectionH.class);
		JjbSectionI jjbSectionI=mapper.map(jjbModel, JjbSectionI.class);
		JjbSectionJ jjbSectionJ=mapper.map(jjbModel, JjbSectionJ.class);
		JjbSectionK jjbSectionK=mapper.map(jjbModel, JjbSectionK.class);
		
		jjbSectionA.setJjbDetails(jjbDetails);
		jjbSectionB.setJjbDetails(jjbDetails);
		jjbSectionC.setJjbDetails(jjbDetails);
		jjbSectionD.setJjbDetails(jjbDetails);
		jjbSectionE.setJjbDetails(jjbDetails);
		jjbSectionF.setJjbDetails(jjbDetails);
		jjbSectionG.setJjbDetails(jjbDetails);
		jjbSectionH.setJjbDetails(jjbDetails);
		jjbSectionI.setJjbDetails(jjbDetails);
		jjbSectionJ.setJjbDetails(jjbDetails);
		jjbSectionK.setJjbDetails(jjbDetails);
		
		jjbDetails.setJjbSectionA(jjbSectionA);
		jjbDetails.setJjbSectionB(jjbSectionB);
		jjbDetails.setJjbSectionC(jjbSectionC);
		jjbDetails.setJjbSectionD(jjbSectionD);
		jjbDetails.setJjbSectionE(jjbSectionE);
		jjbDetails.setJjbSectionF(jjbSectionF);
		jjbDetails.setJjbSectionG(jjbSectionG);
		jjbDetails.setJjbSectionH(jjbSectionH);
		jjbDetails.setJjbSectionI(jjbSectionI);
		jjbDetails.setJjbSectionJ(jjbSectionJ);
		jjbDetails.setJjbSectionK(jjbSectionK);
		
		jjbDetailsRepository.save(jjbDetails);
		jjbSectionARepository.save(jjbSectionA);
		jjbSectionBRepository.save(jjbSectionB);
		jjbSectionCRepository.save(jjbSectionC);
		jjbSectionDRepository.save(jjbSectionD);
		jjbSectionERepository.save(jjbSectionE);
		jjbSectionFRepository.save(jjbSectionF);
		jjbSectionGRepository.save(jjbSectionG);
		jjbSectionHRepository.save(jjbSectionH);
		jjbSectionIRepository.save(jjbSectionI);
		jjbSectionJRepository.save(jjbSectionJ);
		jjbSectionKRepository.save(jjbSectionK);
		
	
		List<JjbDetailsTraining> jjbDetailsTraining = jjbDetails.getJjbDetailsTraining();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(JjbDetailsTraining training : jjbDetailsTraining){
			training.setJjbId(jjbDetails);
		}
		jjbDetailsTrainingRepository.save(jjbDetailsTraining);
		for(JjbDetailsTraining jjbTrain : jjbDetailsTraining){
			remainingIds.add(jjbTrain.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		jjbDetailsTrainingRepository.deleteByTrainingId(remainingIds, jjbDetails.getId());
	}
	
	
	
	@Override
	public JjbModel findLastSavedData(Integer userId) {
		
		JjbModel model = new JjbModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = jjbDetailsRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(jjbDetailsRepository.findMaxTimePeriod(userId));
			JjbDetails jjbDetails = jjbDetailsRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(jjbDetails.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(jjbDetails, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(jjbDetails);
				}
			}else{//code for current month submitted form
				return getData(jjbDetails);
			}
		}
		
	}
	
	private JjbModel getData(JjbDetails jjbDetails){
		JjbModel jjbModel = new JjbModel();
		JjbSectionA jjbSectionA=null==jjbDetails.getJjbSectionA()?null:jjbSectionARepository.findByJjbSectionAId(jjbDetails.getJjbSectionA().getJjbSectionAId());
		JjbSectionB jjbSectionB=null==jjbDetails.getJjbSectionB()?null:jjbSectionBRepository.findByJjbSectionBId(jjbDetails.getJjbSectionB().getJjbSectionBId());
		JjbSectionC jjbSectionC=null==jjbDetails.getJjbSectionC()?null:jjbSectionCRepository.findByJjbSectionCId(jjbDetails.getJjbSectionC().getJjbSectionCId());
		JjbSectionD jjbSectionD=null==jjbDetails.getJjbSectionD()?null:jjbSectionDRepository.findByJjbSectionDId(jjbDetails.getJjbSectionD().getJjbSectionDId());
		JjbSectionE jjbSectionE=null==jjbDetails.getJjbSectionE()?null:jjbSectionERepository.findByJjbSectionEId(jjbDetails.getJjbSectionE().getJjbSectionEId());
		JjbSectionF jjbSectionF=null==jjbDetails.getJjbSectionF()?null:jjbSectionFRepository.findByJjbSectionFId(jjbDetails.getJjbSectionF().getJjbSectionFId());
		JjbSectionG jjbSectionG=null==jjbDetails.getJjbSectionG()?null:jjbSectionGRepository.findByJjbSectionGId(jjbDetails.getJjbSectionG().getJjbSectionGId());
		JjbSectionH jjbSectionH=null==jjbDetails.getJjbSectionH()?null:jjbSectionHRepository.findByJjbSectionHId(jjbDetails.getJjbSectionH().getJjbSectionHId());
		JjbSectionI jjbSectionI=null==jjbDetails.getJjbSectionI()?null:jjbSectionIRepository.findByJjbSectionIId(jjbDetails.getJjbSectionI().getJjbSectionIId());
		JjbSectionJ jjbSectionJ=null==jjbDetails.getJjbSectionJ()?null:jjbSectionJRepository.findByJjbSectionJId(jjbDetails.getJjbSectionJ().getJjbSectionJId());
		JjbSectionK jjbSectionK=null==jjbDetails.getJjbSectionK()?null:jjbSectionKRepository.findByJjbSectionKId(jjbDetails.getJjbSectionK().getJjbSectionKId());
		
	    jjbModel = mapper.map(jjbDetails, JjbModel.class);
	    
	    if(null != jjbSectionA)mapper.map(jjbSectionA, jjbModel);
	    if(null != jjbSectionB)mapper.map(jjbSectionB, jjbModel);
	    if(null != jjbSectionC)mapper.map(jjbSectionC, jjbModel);
	    if(null != jjbSectionD)mapper.map(jjbSectionD, jjbModel);
	    if(null != jjbSectionE)mapper.map(jjbSectionE, jjbModel);
	    if(null != jjbSectionF)mapper.map(jjbSectionF, jjbModel);
	    if(null != jjbSectionG)mapper.map(jjbSectionG, jjbModel);
	    if(null != jjbSectionH)mapper.map(jjbSectionH, jjbModel);
	    if(null != jjbSectionI)mapper.map(jjbSectionI, jjbModel);
	    if(null != jjbSectionJ)mapper.map(jjbSectionJ, jjbModel);
	    if(null != jjbSectionK)mapper.map(jjbSectionK, jjbModel);
		
	    jjbModel.getJjbDetailsTraining().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));				
		for(JjbDetailsTraining jt : jjbModel.getJjbDetailsTraining()){
			jt.setJjbId(null);
		}
		return jjbModel;
	}
	
	private JjbModel getSubmittedData(JjbDetails  lmjjbDetails, Timeperiod userMaxTimePeriod){
		JjbSectionF jjbSectionF = null==lmjjbDetails?null:jjbSectionFRepository.findByJjbSectionFId(lmjjbDetails.getJjbSectionF().getJjbSectionFId());
		JjbModel jjbModel = new JjbModel();
		if(null != jjbSectionF){
			jjbModel.setA1TotalCases(jjbSectionF.getF2TotalCases());
			jjbModel.setA1Boys7to11(jjbSectionF.getF2Boys7to11());
			jjbModel.setA1Boys12to15(jjbSectionF.getF2Boys12to15());
			jjbModel.setA1Boys16to18(jjbSectionF.getF2Boys16to18());
			jjbModel.setA1BoysGreaterThan18(jjbSectionF.getF2BoysGreaterThan18());
			jjbModel.setA1BoysTotal(jjbSectionF.getF2BoysTotal());
			jjbModel.setA1Girls7to11(jjbSectionF.getF2Girls7to11());
			jjbModel.setA1Girls12to15(jjbSectionF.getF2Girls12to15());
			jjbModel.setA1Girls16to18(jjbSectionF.getF2Girls16to18());
			jjbModel.setA1GirlsGreaterThan18(jjbSectionF.getF2GirlsGreaterThan18());
			jjbModel.setA1GirlsTotal(jjbSectionF.getF2GirlsTotal());
			jjbModel.setA1GrandTotal(jjbSectionF.getF2GrandTotal());
			
			jjbModel.setA2TotalCases(jjbSectionF.getF3TotalCases());
			jjbModel.setA2Boys7to11(jjbSectionF.getF3Boys7to11());
			jjbModel.setA2Boys12to15(jjbSectionF.getF3Boys12to15());
			jjbModel.setA2Boys16to18(jjbSectionF.getF3Boys16to18());
			jjbModel.setA2BoysGreaterThan18(jjbSectionF.getF3BoysGreaterThan18());
			jjbModel.setA2BoysTotal(jjbSectionF.getF3BoysTotal());
			jjbModel.setA2Girls7to11(jjbSectionF.getF3Girls7to11());
			jjbModel.setA2Girls12to15(jjbSectionF.getF3Girls12to15());
			jjbModel.setA2Girls16to18(jjbSectionF.getF3Girls16to18());
			jjbModel.setA2GirlsGreaterThan18(jjbSectionF.getF3GirlsGreaterThan18());
			jjbModel.setA2GirlsTotal(jjbSectionF.getF3GirlsTotal());
			jjbModel.setA2GrandTotal(jjbSectionF.getF3GrandTotal());
			
			jjbModel.setaTotalCases(jjbSectionF.getF1TotalCases());
			jjbModel.setaBoys7to11(jjbSectionF.getF1Boys7to11());
			jjbModel.setaBoys12to15(jjbSectionF.getF1Boys12to15());
			jjbModel.setaBoys16to18(jjbSectionF.getF1Boys16to18());
			jjbModel.setaBoysGreaterThan18(jjbSectionF.getF1BoysGreaterThan18());
			jjbModel.setaBoysTotal(jjbSectionF.getF1BoysTotal());
			jjbModel.setaGirls7to11(jjbSectionF.getF1Girls7to11());
			jjbModel.setaGirls12to15(jjbSectionF.getF1Girls12to15());
			jjbModel.setaGirls16to18(jjbSectionF.getF1Girls16to18());
			jjbModel.setaGirlsGreaterThan18(jjbSectionF.getF1GirlsGreaterThan18());
			jjbModel.setaGirlsTotal(jjbSectionF.getF1GirlsTotal());
			jjbModel.setaGrandTotal(jjbSectionF.getF1GrandTotal()); 
			
			jjbModel.setSubmitted(false);
		}
		jjbModel.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
		return jjbModel;
	}
	
	

	public JjbModel findData(Integer userId) {
		CPMISDate date = new CPMISDate();
		Date firstDay = date.currentMonthFirstDate();
		Date lastDay = date.currentMonthLastDate();
		
		JjbDetails  jjbDetails =jjbDetailsRepository.findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(userId, firstDay, lastDay);
		if(null != jjbDetails){
			JjbModel jjbModel = new JjbModel();
			if(!jjbDetails.isSubmitted() || (jjbDetails.getDateOfSubmimission().after(firstDay) && jjbDetails.getDateOfSubmimission().before(lastDay))){
				if(null != jjbDetails.getLastSaveDate() && jjbDetails.getLastSaveDate().after(firstDay) && jjbDetails.getLastSaveDate().before(lastDay)){
					JjbSectionA jjbSectionA=null==jjbDetails.getJjbSectionA()?null:jjbSectionARepository.findByJjbSectionAId(jjbDetails.getJjbSectionA().getJjbSectionAId());
					JjbSectionB jjbSectionB=null==jjbDetails.getJjbSectionB()?null:jjbSectionBRepository.findByJjbSectionBId(jjbDetails.getJjbSectionB().getJjbSectionBId());
					JjbSectionC jjbSectionC=null==jjbDetails.getJjbSectionC()?null:jjbSectionCRepository.findByJjbSectionCId(jjbDetails.getJjbSectionC().getJjbSectionCId());
					JjbSectionD jjbSectionD=null==jjbDetails.getJjbSectionD()?null:jjbSectionDRepository.findByJjbSectionDId(jjbDetails.getJjbSectionD().getJjbSectionDId());
					JjbSectionE jjbSectionE=null==jjbDetails.getJjbSectionE()?null:jjbSectionERepository.findByJjbSectionEId(jjbDetails.getJjbSectionE().getJjbSectionEId());
					JjbSectionF jjbSectionF=null==jjbDetails.getJjbSectionF()?null:jjbSectionFRepository.findByJjbSectionFId(jjbDetails.getJjbSectionF().getJjbSectionFId());
					JjbSectionG jjbSectionG=null==jjbDetails.getJjbSectionG()?null:jjbSectionGRepository.findByJjbSectionGId(jjbDetails.getJjbSectionG().getJjbSectionGId());
					JjbSectionH jjbSectionH=null==jjbDetails.getJjbSectionH()?null:jjbSectionHRepository.findByJjbSectionHId(jjbDetails.getJjbSectionH().getJjbSectionHId());
					JjbSectionI jjbSectionI=null==jjbDetails.getJjbSectionI()?null:jjbSectionIRepository.findByJjbSectionIId(jjbDetails.getJjbSectionI().getJjbSectionIId());
					JjbSectionJ jjbSectionJ=null==jjbDetails.getJjbSectionJ()?null:jjbSectionJRepository.findByJjbSectionJId(jjbDetails.getJjbSectionJ().getJjbSectionJId());
					JjbSectionK jjbSectionK=null==jjbDetails.getJjbSectionK()?null:jjbSectionKRepository.findByJjbSectionKId(jjbDetails.getJjbSectionK().getJjbSectionKId());
					
				    jjbModel = mapper.map(jjbDetails, JjbModel.class);
				    
				    if(null != jjbSectionA)mapper.map(jjbSectionA, jjbModel);
				    if(null != jjbSectionB)mapper.map(jjbSectionB, jjbModel);
				    if(null != jjbSectionC)mapper.map(jjbSectionC, jjbModel);
				    if(null != jjbSectionD)mapper.map(jjbSectionD, jjbModel);
				    if(null != jjbSectionE)mapper.map(jjbSectionE, jjbModel);
				    if(null != jjbSectionF)mapper.map(jjbSectionF, jjbModel);
				    if(null != jjbSectionG)mapper.map(jjbSectionG, jjbModel);
				    if(null != jjbSectionH)mapper.map(jjbSectionH, jjbModel);
				    if(null != jjbSectionI)mapper.map(jjbSectionI, jjbModel);
				    if(null != jjbSectionJ)mapper.map(jjbSectionJ, jjbModel);
				    if(null != jjbSectionK)mapper.map(jjbSectionK, jjbModel);
					
				    jjbModel.getJjbDetailsTraining().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));				
					for(JjbDetailsTraining jt : jjbModel.getJjbDetailsTraining()){
						jt.setJjbId(null);
					}
					return jjbModel;
				}else
					return null;
			}
			return jjbModel;
		}else{
			JjbDetails  lmjjbDetails =jjbDetailsRepository.findLastReportingMonthSubmissionData(userId);
			
			JjbSectionF jjbSectionF = null==lmjjbDetails?null:jjbSectionFRepository.findByJjbSectionFId(lmjjbDetails.getJjbSectionF().getJjbSectionFId());
			JjbModel jjbModel = new JjbModel();
			if(null != jjbSectionF){
				jjbModel.setA1TotalCases(jjbSectionF.getF2TotalCases());
				jjbModel.setA1Boys7to11(jjbSectionF.getF2Boys7to11());
				jjbModel.setA1Boys12to15(jjbSectionF.getF2Boys12to15());
				jjbModel.setA1Boys16to18(jjbSectionF.getF2Boys16to18());
				jjbModel.setA1BoysGreaterThan18(jjbSectionF.getF2BoysGreaterThan18());
				jjbModel.setA1BoysTotal(jjbSectionF.getF2BoysTotal());
				jjbModel.setA1Girls7to11(jjbSectionF.getF2Girls7to11());
				jjbModel.setA1Girls12to15(jjbSectionF.getF2Girls12to15());
				jjbModel.setA1Girls16to18(jjbSectionF.getF2Girls16to18());
				jjbModel.setA1GirlsGreaterThan18(jjbSectionF.getF2GirlsGreaterThan18());
				jjbModel.setA1GirlsTotal(jjbSectionF.getF2GirlsTotal());
				jjbModel.setA1GrandTotal(jjbSectionF.getF2GrandTotal());
				
				jjbModel.setA2TotalCases(jjbSectionF.getF3TotalCases());
				jjbModel.setA2Boys7to11(jjbSectionF.getF3Boys7to11());
				jjbModel.setA2Boys12to15(jjbSectionF.getF3Boys12to15());
				jjbModel.setA2Boys16to18(jjbSectionF.getF3Boys16to18());
				jjbModel.setA2BoysGreaterThan18(jjbSectionF.getF3BoysGreaterThan18());
				jjbModel.setA2BoysTotal(jjbSectionF.getF3BoysTotal());
				jjbModel.setA2Girls7to11(jjbSectionF.getF3Girls7to11());
				jjbModel.setA2Girls12to15(jjbSectionF.getF3Girls12to15());
				jjbModel.setA2Girls16to18(jjbSectionF.getF3Girls16to18());
				jjbModel.setA2GirlsGreaterThan18(jjbSectionF.getF3GirlsGreaterThan18());
				jjbModel.setA2GirlsTotal(jjbSectionF.getF3GirlsTotal());
				jjbModel.setA2GrandTotal(jjbSectionF.getF3GrandTotal());
				
				jjbModel.setaTotalCases(jjbSectionF.getF1TotalCases());
				jjbModel.setaBoys7to11(jjbSectionF.getF1Boys7to11());
				jjbModel.setaBoys12to15(jjbSectionF.getF1Boys12to15());
				jjbModel.setaBoys16to18(jjbSectionF.getF1Boys16to18());
				jjbModel.setaBoysGreaterThan18(jjbSectionF.getF1BoysGreaterThan18());
				jjbModel.setaBoysTotal(jjbSectionF.getF1BoysTotal());
				jjbModel.setaGirls7to11(jjbSectionF.getF1Girls7to11());
				jjbModel.setaGirls12to15(jjbSectionF.getF1Girls12to15());
				jjbModel.setaGirls16to18(jjbSectionF.getF1Girls16to18());
				jjbModel.setaGirlsGreaterThan18(jjbSectionF.getF1GirlsGreaterThan18());
				jjbModel.setaGirlsTotal(jjbSectionF.getF1GirlsTotal());
				jjbModel.setaGrandTotal(jjbSectionF.getF1GrandTotal()); 
				
				jjbModel.setSubmitted(false);
			}
			return jjbModel;
		}
		
	}

}
