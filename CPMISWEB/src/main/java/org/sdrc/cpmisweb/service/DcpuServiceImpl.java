package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.dcpu.DCPUDetailsTraining;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionA;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionB;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionC;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionD;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionE;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionF;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionG;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionH;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionI;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionJ;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionK;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionL;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionM;
import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionO;
import org.sdrc.cpmisweb.domain.dcpu.DcpuDetails;
import org.sdrc.cpmisweb.model.DcpuModel;
import org.sdrc.cpmisweb.repository.DCPUDetailsTrainingRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionARepository;
import org.sdrc.cpmisweb.repository.DCPUSectionBRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionCRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionDRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionERepository;
import org.sdrc.cpmisweb.repository.DCPUSectionFRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionGRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionHRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionIRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionJRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionKRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionLRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionMRepository;
import org.sdrc.cpmisweb.repository.DCPUSectionORepository;
import org.sdrc.cpmisweb.repository.DcpuDetailsRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 06-Nov-2017 3:17:08 pm
 */
@Service
public class DcpuServiceImpl implements DcpuService {
	
	@Autowired
	DcpuDetailsRepository dcpuDetailsRepository;
	@Autowired
	DCPUSectionARepository dcpuSectionARepository;
	@Autowired
	DCPUSectionBRepository dcpuSectionBRepository;
	@Autowired
	DCPUSectionCRepository dcpuSectionCRepository;
	@Autowired
	DCPUSectionDRepository dcpuSectionDRepository;
	@Autowired
	DCPUSectionERepository dcpuSectionERepository;
	@Autowired
	DCPUSectionFRepository dcpuSectionFRepository;
	@Autowired
	DCPUSectionGRepository dcpuSectionGRepository;
	@Autowired
	DCPUSectionHRepository dcpuSectionHRepository;
	@Autowired
	DCPUSectionIRepository dcpuSectionIRepository;
	@Autowired
	DCPUSectionJRepository dcpuSectionJRepository;
	@Autowired
	DCPUSectionKRepository dcpuSectionKRepository;
	@Autowired
	DCPUSectionLRepository dcpuSectionLRepository;
	@Autowired
	DCPUSectionMRepository dcpuSectionMRepository;
	@Autowired
	DCPUSectionORepository dcpuSectionORepository; 
	@Autowired
	DCPUDetailsTrainingRepository dcpuDetailsTrainingRepository; 
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;
	
	@Override
	public void save(DcpuModel dcpuModel) {
		DcpuDetails  dcpuDetails  = mapper.map(dcpuModel, DcpuDetails.class);
		DCPUSectionA dcpuSectionA = mapper.map(dcpuModel, DCPUSectionA.class);
		DCPUSectionB dcpuSectionB = mapper.map(dcpuModel, DCPUSectionB.class);
		DCPUSectionC dcpuSectionC = mapper.map(dcpuModel, DCPUSectionC.class);
		DCPUSectionD dcpuSectionD = mapper.map(dcpuModel, DCPUSectionD.class);
		DCPUSectionE dcpuSectionE = mapper.map(dcpuModel, DCPUSectionE.class);
		DCPUSectionF dcpuSectionF = mapper.map(dcpuModel, DCPUSectionF.class);
		DCPUSectionG dcpuSectionG = mapper.map(dcpuModel, DCPUSectionG.class);
		DCPUSectionH dcpuSectionH = mapper.map(dcpuModel, DCPUSectionH.class);
		DCPUSectionI dcpuSectionI = mapper.map(dcpuModel, DCPUSectionI.class);
		DCPUSectionJ dcpuSectionJ = mapper.map(dcpuModel, DCPUSectionJ.class);
		DCPUSectionK dcpuSectionK = mapper.map(dcpuModel, DCPUSectionK.class);
		DCPUSectionL dcpuSectionL = mapper.map(dcpuModel, DCPUSectionL.class);
		DCPUSectionM dcpuSectionM = mapper.map(dcpuModel, DCPUSectionM.class);
		DCPUSectionO dcpuSectionO = mapper.map(dcpuModel, DCPUSectionO.class);
		
		dcpuSectionA.setDcpuDetails(dcpuDetails);
		dcpuSectionB.setDcpuDetails(dcpuDetails);
		dcpuSectionC.setDcpuDetails(dcpuDetails);
		dcpuSectionD.setDcpuDetails(dcpuDetails);
		dcpuSectionE.setDcpuDetails(dcpuDetails);
		dcpuSectionF.setDcpuDetails(dcpuDetails);
		dcpuSectionG.setDcpuDetails(dcpuDetails);
		dcpuSectionH.setDcpuDetails(dcpuDetails);
		dcpuSectionI.setDcpuDetails(dcpuDetails);
		dcpuSectionJ.setDcpuDetails(dcpuDetails);
		dcpuSectionK.setDcpuDetails(dcpuDetails);
		dcpuSectionL.setDcpuDetails(dcpuDetails);
		dcpuSectionM.setDcpuDetails(dcpuDetails);
		dcpuSectionO.setDcpuDetails(dcpuDetails);
		
		dcpuDetails.setDcpuSectionA(dcpuSectionA);
		dcpuDetails.setDcpuSectionB(dcpuSectionB);
		dcpuDetails.setDcpuSectionC(dcpuSectionC);
		dcpuDetails.setDcpuSectionD(dcpuSectionD);
		dcpuDetails.setDcpuSectionE(dcpuSectionE);
		dcpuDetails.setDcpuSectionF(dcpuSectionF);
		dcpuDetails.setDcpuSectionG(dcpuSectionG);
		dcpuDetails.setDcpuSectionH(dcpuSectionH);
		dcpuDetails.setDcpuSectionI(dcpuSectionI);
		dcpuDetails.setDcpuSectionJ(dcpuSectionJ);
		dcpuDetails.setDcpuSectionK(dcpuSectionK);
		dcpuDetails.setDcpuSectionL(dcpuSectionL);
		dcpuDetails.setDcpuSectionM(dcpuSectionM);
		dcpuDetails.setDcpuSectionO(dcpuSectionO);
		
		dcpuDetailsRepository.save(dcpuDetails);
		dcpuSectionARepository.save(dcpuSectionA);
		dcpuSectionBRepository.save(dcpuSectionB);
		dcpuSectionCRepository.save(dcpuSectionC);
		dcpuSectionDRepository.save(dcpuSectionD);
		dcpuSectionERepository.save(dcpuSectionE);
		dcpuSectionFRepository.save(dcpuSectionF);
		dcpuSectionGRepository.save(dcpuSectionG);
		dcpuSectionHRepository.save(dcpuSectionH);
		dcpuSectionIRepository.save(dcpuSectionI);
		dcpuSectionJRepository.save(dcpuSectionJ);
		dcpuSectionKRepository.save(dcpuSectionK);
		dcpuSectionLRepository.save(dcpuSectionL);
		dcpuSectionMRepository.save(dcpuSectionM);
		dcpuSectionORepository.save(dcpuSectionO);
		
		
		List<DCPUDetailsTraining> dcpuDetailsTrainings =dcpuDetails.getDcpuDetailsTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(DCPUDetailsTraining dcpuTraining : dcpuDetailsTrainings){
			dcpuTraining.setDcpuId(dcpuDetails);
		}
		dcpuDetailsTrainingRepository.save(dcpuDetailsTrainings);
		for(DCPUDetailsTraining dcpuTraining : dcpuDetailsTrainings){
			remainingIds.add(dcpuTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		dcpuDetailsTrainingRepository.deleteByTrainingId(remainingIds, dcpuDetails.getId());
		
		
	}
	
	@Override
	public DcpuModel findLastSavedData(Integer userId) {
		DcpuModel model = new DcpuModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = dcpuDetailsRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(dcpuDetailsRepository.findMaxTimePeriod(userId));
			DcpuDetails dcpuDetails = dcpuDetailsRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(dcpuDetails.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(dcpuDetails, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(dcpuDetails);
				}
			}else{//code for current month submitted form
				return getData(dcpuDetails);
			}
		}
	}
	
	private DcpuModel getData(DcpuDetails dcpuDetails){
		DcpuModel model = new DcpuModel();
		DCPUSectionA dcpuSectionA=null==dcpuDetails.getDcpuSectionA()?null:dcpuSectionARepository.findByDcpuSectionAId(dcpuDetails.getDcpuSectionA().getDcpuSectionAId());
		DCPUSectionB dcpuSectionB=null==dcpuDetails.getDcpuSectionB()?null:dcpuSectionBRepository.findByDcpuSectionBId(dcpuDetails.getDcpuSectionB().getDcpuSectionBId());
		DCPUSectionC dcpuSectionC=null==dcpuDetails.getDcpuSectionC()?null:dcpuSectionCRepository.findByDcpuSectionCId(dcpuDetails.getDcpuSectionC().getDcpuSectionCId());
		DCPUSectionD dcpuSectionD=null==dcpuDetails.getDcpuSectionD()?null:dcpuSectionDRepository.findByDcpuSectionDId(dcpuDetails.getDcpuSectionD().getDcpuSectionDId());
		DCPUSectionE dcpuSectionE=null==dcpuDetails.getDcpuSectionE()?null:dcpuSectionERepository.findByDcpuSectionEId(dcpuDetails.getDcpuSectionE().getDcpuSectionEId());
		DCPUSectionF dcpuSectionF=null==dcpuDetails.getDcpuSectionF()?null:dcpuSectionFRepository.findByDcpuSectionFId(dcpuDetails.getDcpuSectionF().getDcpuSectionFId());
		DCPUSectionG dcpuSectionG=null==dcpuDetails.getDcpuSectionG()?null:dcpuSectionGRepository.findByDcpuSectionGId(dcpuDetails.getDcpuSectionG().getDcpuSectionGId());
		DCPUSectionH dcpuSectionH=null==dcpuDetails.getDcpuSectionH()?null:dcpuSectionHRepository.findByDcpuSectionHId(dcpuDetails.getDcpuSectionH().getDcpuSectionHId());
		DCPUSectionI dcpuSectionI=null==dcpuDetails.getDcpuSectionI()?null:dcpuSectionIRepository.findByDcpuSectionIId(dcpuDetails.getDcpuSectionI().getDcpuSectionIId());
		DCPUSectionJ dcpuSectionJ=null==dcpuDetails.getDcpuSectionJ()?null:dcpuSectionJRepository.findByDcpuSectionJId(dcpuDetails.getDcpuSectionJ().getDcpuSectionJId());
		DCPUSectionK dcpuSectionK=null==dcpuDetails.getDcpuSectionK()?null:dcpuSectionKRepository.findByDcpuSectionKId(dcpuDetails.getDcpuSectionK().getDcpuSectionKId());
		DCPUSectionL dcpuSectionL=null==dcpuDetails.getDcpuSectionL()?null:dcpuSectionLRepository.findByDcpuSectionLId(dcpuDetails.getDcpuSectionL().getDcpuSectionLId());
		DCPUSectionM dcpuSectionM=null==dcpuDetails.getDcpuSectionM()?null:dcpuSectionMRepository.findByDcpuSectionMId(dcpuDetails.getDcpuSectionM().getDcpuSectionMId());
		DCPUSectionO dcpuSectionO=null==dcpuDetails.getDcpuSectionO()?null:dcpuSectionORepository.findByDcpuSectionOId(dcpuDetails.getDcpuSectionO().getDcpuSectionOId());

	    model = mapper.map(dcpuDetails,  DcpuModel.class);
			if(null != dcpuSectionA)mapper.map(dcpuSectionA, model);
			if(null != dcpuSectionB)mapper.map(dcpuSectionB, model);
			if(null != dcpuSectionC)mapper.map(dcpuSectionC, model);
			if(null != dcpuSectionD)mapper.map(dcpuSectionD, model);
			if(null != dcpuSectionE)mapper.map(dcpuSectionE, model);
			if(null != dcpuSectionF)mapper.map(dcpuSectionF, model);
			if(null != dcpuSectionG)mapper.map(dcpuSectionG, model);
			if(null != dcpuSectionH)mapper.map(dcpuSectionH, model);
			if(null != dcpuSectionI)mapper.map(dcpuSectionI, model);
			if(null != dcpuSectionJ)mapper.map(dcpuSectionJ, model);
			if(null != dcpuSectionK)mapper.map(dcpuSectionK, model);
			if(null != dcpuSectionL)mapper.map(dcpuSectionL, model);
			if(null != dcpuSectionM)mapper.map(dcpuSectionM, model);
			if(null != dcpuSectionO)mapper.map(dcpuSectionO, model);
			
			//the following line of code is for sorting the training details by trainingId(insertion order).(Biswa)
			model.getDcpuDetailsTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
			for(DCPUDetailsTraining dcpuTraining : model.getDcpuDetailsTrainings()){
				dcpuTraining.setDcpuId(null);
		}
		return model;
	}
	
	private DcpuModel getSubmittedData(DcpuDetails lmdcpuDetails, Timeperiod userMaxTimePeriod){
		DCPUSectionB dcpuSectionB = null==lmdcpuDetails?null:dcpuSectionBRepository.findByDcpuSectionBId(lmdcpuDetails.getDcpuSectionB().getDcpuSectionBId());
		DCPUSectionC dcpuSectionC = null==lmdcpuDetails?null:dcpuSectionCRepository.findByDcpuSectionCId(lmdcpuDetails.getDcpuSectionC().getDcpuSectionCId());
		DCPUSectionG dcpuSectionG = null==lmdcpuDetails?null:dcpuSectionGRepository.findByDcpuSectionGId(lmdcpuDetails.getDcpuSectionG().getDcpuSectionGId());
		DCPUSectionH dcpuSectionH = null==lmdcpuDetails?null:dcpuSectionHRepository.findByDcpuSectionHId(lmdcpuDetails.getDcpuSectionH().getDcpuSectionHId());
		DCPUSectionJ dcpuSectionJ = null==lmdcpuDetails?null:dcpuSectionJRepository.findByDcpuSectionJId(lmdcpuDetails.getDcpuSectionJ().getDcpuSectionJId());
		DCPUSectionL dcpuSectionL = null==lmdcpuDetails?null:dcpuSectionLRepository.findByDcpuSectionLId(lmdcpuDetails.getDcpuSectionL().getDcpuSectionLId());
		
		DcpuModel dcpuModel = new DcpuModel();
		if(null != dcpuSectionB){
			dcpuModel.setB1OrphansBoysYearsBelow6(dcpuSectionB.getB3OrphansBoysYearsBelow6());
			dcpuModel.setB1OrphansGirlsYearsBelow6(dcpuSectionB.getB3OrphansGirlsYearsBelow6());
			dcpuModel.setB1OrphansTotalYearsBelow6(dcpuSectionB.getB3OrphansTotalYearsBelow6());
			dcpuModel.setB1OrphansBoysYears6to18(dcpuSectionB.getB3OrphansBoysYears6to18());
			dcpuModel.setB1OrphansGirlsYears6to18(dcpuSectionB.getB3OrphansGirlsYears6to18());
			dcpuModel.setB1OrphansTotalYears6to18(dcpuSectionB.getB3OrphansTotalYears6to18());
			dcpuModel.setB1OrphansBoysTotal(dcpuSectionB.getB3OrphansBoysTotal());
			dcpuModel.setB1OrphansGirlsTotal(dcpuSectionB.getB3OrphansGirlsTotal());
			dcpuModel.setB1OrphansTotal(dcpuSectionB.getB3OrphansTotal());
			dcpuModel.setB1HIVBoysYearsBelow6(dcpuSectionB.getB3HIVBoysYearsBelow6());
			dcpuModel.setB1HIVGirlsYearsBelow6(dcpuSectionB.getB3HIVGirlsYearsBelow6());
			dcpuModel.setB1HIVTotalYearsBelow6(dcpuSectionB.getB3HIVTotalYearsBelow6());
			dcpuModel.setB1HIVBoysYears6to18(dcpuSectionB.getB3HIVBoysYears6to18());
			dcpuModel.setB1HIVGirlsYears6to18(dcpuSectionB.getB3HIVGirlsYears6to18());
			dcpuModel.setB1HIVTotalYears6to18(dcpuSectionB.getB3HIVTotalYears6to18());
			dcpuModel.setB1HIVBoysTotal(dcpuSectionB.getB3HIVBoysTotal());
			dcpuModel.setB1HIVGirlsTotal(dcpuSectionB.getB3HIVGirlsTotal());
			dcpuModel.setB1HIVTotal(dcpuSectionB.getB3HIVTotal());
			dcpuModel.setB1LeprosyBoysYearsBelow6(dcpuSectionB.getB3LeprosyBoysYearsBelow6());
			dcpuModel.setB1LeprosyGirlsYearsBelow6(dcpuSectionB.getB3LeprosyGirlsYearsBelow6());
			dcpuModel.setB1LeprosyTotalYearsBelow6(dcpuSectionB.getB3LeprosyTotalYearsBelow6());
			dcpuModel.setB1LeprosyBoysYears6to18(dcpuSectionB.getB3LeprosyBoysYears6to18());
			dcpuModel.setB1LeprosyGirlsYears6to18(dcpuSectionB.getB3LeprosyGirlsYears6to18());
			dcpuModel.setB1LeprosyTotalYears6to18(dcpuSectionB.getB3LeprosyTotalYears6to18());
			dcpuModel.setB1LeprosyBoysTotal(dcpuSectionB.getB3LeprosyBoysTotal());
			dcpuModel.setB1LeprosyGirlsTotal(dcpuSectionB.getB3LeprosyGirlsTotal());
			dcpuModel.setB1LeprosyTotal(dcpuSectionB.getB3LeprosyTotal());
			dcpuModel.setB1TotalBoysYearsBelow6(dcpuSectionB.getB3TotalBoysYearsBelow6());
			dcpuModel.setB1TotalGirlsYearsBelow6(dcpuSectionB.getB3TotalGirlsYearsBelow6());
			dcpuModel.setB1TotalTotalYearsBelow6(dcpuSectionB.getB3TotalTotalYearsBelow6());
			dcpuModel.setB1TotalBoysYears6to18(dcpuSectionB.getB3TotalBoysYears6to18());
			dcpuModel.setB1TotalGirlsYears6to18(dcpuSectionB.getB3TotalGirlsYears6to18());
			dcpuModel.setB1TotalTotalYears6to18(dcpuSectionB.getB3TotalTotalYears6to18());
			dcpuModel.setB1TotalBoysTotal(dcpuSectionB.getB3TotalBoysTotal());
			dcpuModel.setB1TotalGirlsTotal(dcpuSectionB.getB3TotalGirlsTotal());
			dcpuModel.setB1Total(dcpuSectionB.getB3Total());
			
			dcpuModel.setB4a(dcpuSectionB.getB4d());
		}
		if(null != dcpuSectionC){
			dcpuModel.setC4a(dcpuSectionC.getC4d());
		}
		if(null != dcpuSectionG){
			dcpuModel.setG1aCases(dcpuSectionG.getG3Cases());
			dcpuModel.setG1aBoys(dcpuSectionG.getG3Boys());
			dcpuModel.setG1aGirls(dcpuSectionG.getG3Girls());
			dcpuModel.setG1aTotalCICL(dcpuSectionG.getG3TotalCICL());
			
			dcpuModel.setG4a(dcpuSectionG.getG4d());
		}
		if(null != dcpuSectionH){
			dcpuModel.setH1aCases(dcpuSectionH.getH3Cases());
			dcpuModel.setH1aBoys(dcpuSectionH.getH3Boys());
			dcpuModel.setH1aGirls(dcpuSectionH.getH3Girls());
			dcpuModel.setH1aTotalCICL(dcpuSectionH.getH3TotalCICL());
			
			dcpuModel.setH4a(dcpuSectionH.getH4d());
		}
		if(null != dcpuSectionJ){
			dcpuModel.setJ1aCases(dcpuSectionJ.getJ3Cases());
			dcpuModel.setJ1aBoys(dcpuSectionJ.getJ3Boys());
			dcpuModel.setJ1aGirls(dcpuSectionJ.getJ3Girls());
			dcpuModel.setJ1aTotalCICL(dcpuSectionJ.getJ3TotalCICL());
		}
		if(null != dcpuSectionL){
			dcpuModel.setL1iaBoys(dcpuSectionL.getL1ieBoys());
			dcpuModel.setL1iaGirls(dcpuSectionL.getL1ieGirls());
			dcpuModel.setL1iaTotalCICL(dcpuSectionL.getL1ieTotalCICL());
			
			dcpuModel.setL1iiiaEcost(dcpuSectionL.getL1iiidEcost());
			dcpuModel.setL1iiiaPcost(dcpuSectionL.getL1iiidPcost());
			dcpuModel.setL1iiiaTotalCost(dcpuSectionL.getL1iiidTotalCost());
			
			dcpuModel.setL2iaBoys(dcpuSectionL.getL2ieBoys());
			dcpuModel.setL2iaGirls(dcpuSectionL.getL2ieGirls());
			dcpuModel.setL2iaTotalCICL(dcpuSectionL.getL2ieTotalCICL());
			dcpuModel.setL2iiiaEcost(dcpuSectionL.getL2iiidEcost());
			dcpuModel.setL2iiiaPcost(dcpuSectionL.getL2iiidPcost());
			dcpuModel.setL2iiiaTotalCost(dcpuSectionL.getL2iiidTotalCost());
			
			dcpuModel.setL3iaBoys(dcpuSectionL.getL3ieBoys());
			dcpuModel.setL3iaGirls(dcpuSectionL.getL3ieGirls());
			dcpuModel.setL3iaTotalCICL(dcpuSectionL.getL3ieTotalCICL());
			
			dcpuModel.setL3iiiaEcost(dcpuSectionL.getL3iiidEcost());
			dcpuModel.setL3iiiaPcost(dcpuSectionL.getL3iiidPcost());
			dcpuModel.setL3iiiaTotalCost(dcpuSectionL.getL3iiidTotalCost());
			
			dcpuModel.setL4iaChildrenOnFirstDay(dcpuSectionL.getL4iaTotalChildrenLastday());
			
			dcpuModel.setL4iii1aEcost(dcpuSectionL.getL4iii1dEcost());
			dcpuModel.setL4iii1aPcost(dcpuSectionL.getL4iii1dPcost());
			dcpuModel.setL4iii1aTotalCost(dcpuSectionL.getL4iii1dTotalCost());
			
			dcpuModel.setL4iii2aOpeningBalanceFirstDay(dcpuSectionL.getL4iii2aClosingBalanceLastday());
			
			dcpuModel.setL5iaChildrenFirstDay(dcpuSectionL.getL5ieTotalChildrenOnLastday());
			
			dcpuModel.setL5iii1aEcost(dcpuSectionL.getL5iii1dEcost());
			dcpuModel.setL5iii1aPcost(dcpuSectionL.getL5iii1dPcost());
			dcpuModel.setL5iii1aTotalCost(dcpuSectionL.getL5iii1dTotalCost());
			
			dcpuModel.setL5iii2aOpeningBalanceFirstDay(dcpuSectionL.getL5iii2dClosingBalanceLastday());
			
			dcpuModel.setL6iaBoys(dcpuSectionL.getL6ieBoys());
			dcpuModel.setL6iaGirls(dcpuSectionL.getL6ieGirls());
			dcpuModel.setL6iaTotalCICL(dcpuSectionL.getL6ieTotalCICL());
			
			dcpuModel.setL6iii1aEcost(dcpuSectionL.getL6iii1dEcost());
			dcpuModel.setL6iii1aPcost(dcpuSectionL.getL6iii1dPcost());
			dcpuModel.setL6iii1aTotalCost(dcpuSectionL.getL6iii1dTotalCost());
			
			dcpuModel.setL6iii2aOpeningBalanceFirstDay(dcpuSectionL.getL6iii2dClosingBalanceLastday());
			
			dcpuModel.setL7iaBoys(dcpuSectionL.getL7ieBoys());
			dcpuModel.setL7iaGirls(dcpuSectionL.getL7ieGirls());
			dcpuModel.setL7iaTotalCICL(dcpuSectionL.getL7ieTotalCICL());
			
			dcpuModel.setL7iii1aEcost(dcpuSectionL.getL7iii1dEcost());
			dcpuModel.setL7iii1aPcost(dcpuSectionL.getL7iii1dPcost());
			dcpuModel.setL7iii1aTotalCost(dcpuSectionL.getL7iii1dTotalCost());
			
			dcpuModel.setL7ii2aOpeningBalanceFirstDay(dcpuSectionL.getL7ii2dClosingBalanceLastday());
			
		}
		dcpuModel.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
		return dcpuModel;
	}

}
