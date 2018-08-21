package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;
import java.util.Set;
import java.util.stream.Collectors;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.saa.SaaDetails;
import org.sdrc.cpmisweb.domain.saa.SaaDetailsTraining;
import org.sdrc.cpmisweb.domain.saa.SaaSectionA;
import org.sdrc.cpmisweb.domain.saa.SaaSectionB;
import org.sdrc.cpmisweb.domain.saa.SaaSectionC;
import org.sdrc.cpmisweb.domain.saa.SaaSectionCChildDeatails;
import org.sdrc.cpmisweb.domain.saa.SaaSectionD;
import org.sdrc.cpmisweb.domain.saa.SaaSectionE;
import org.sdrc.cpmisweb.domain.saa.SaaSectionF;
import org.sdrc.cpmisweb.domain.saa.SaaSectionG;
import org.sdrc.cpmisweb.domain.saa.SaaSectionH;
import org.sdrc.cpmisweb.domain.saa.SaaSectionJ;
import org.sdrc.cpmisweb.model.SaaModel;
import org.sdrc.cpmisweb.repository.SaaDetailsRepository;
import org.sdrc.cpmisweb.repository.SaaDetailsTrainingRepository;
import org.sdrc.cpmisweb.repository.SaaSectionARepository;
import org.sdrc.cpmisweb.repository.SaaSectionBRepository;
import org.sdrc.cpmisweb.repository.SaaSectionCChildDeatailsRepository;
import org.sdrc.cpmisweb.repository.SaaSectionCRepository;
import org.sdrc.cpmisweb.repository.SaaSectionDRepository;
import org.sdrc.cpmisweb.repository.SaaSectionERepository;
import org.sdrc.cpmisweb.repository.SaaSectionFRepository;
import org.sdrc.cpmisweb.repository.SaaSectionGRepository;
import org.sdrc.cpmisweb.repository.SaaSectionHRepository;
import org.sdrc.cpmisweb.repository.SaaSectionJRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 25-Dec-2017 2:27:59 pm
 *
 */
@Service
public class SaaServiceImpl implements SaaService{
	
	@Autowired
	SaaDetailsRepository saaDetailsRepository;
	@Autowired
	SaaSectionARepository saaSectionARepository;
	@Autowired
	SaaSectionBRepository saaSectionBRepository;
	@Autowired
	SaaSectionCRepository saaSectionCRepository;
	@Autowired
	SaaSectionDRepository saaSectionDRepository;
	@Autowired
	SaaSectionERepository saaSectionERepository;
	@Autowired
	SaaSectionFRepository saaSectionFRepository;
	@Autowired
	SaaSectionGRepository saaSectionGRepository;
	@Autowired
	SaaSectionHRepository saaSectionHRepository;
	@Autowired
	SaaSectionCChildDeatailsRepository saaSectionCChildDeatailsRepository;
	@Autowired
	SaaSectionJRepository saaSectionJRepository;
	@Autowired
	SaaDetailsTrainingRepository saaDetailsTrainingRepository;
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Override
	public void save(SaaModel saaModel) {
		
		SaaDetails saaDetails=mapper.map(saaModel, SaaDetails.class);
		SaaSectionA saaSectionA=mapper.map(saaModel, SaaSectionA.class);
		SaaSectionB saaSectionB=mapper.map(saaModel, SaaSectionB.class);
		SaaSectionC saaSectionC=mapper.map(saaModel, SaaSectionC.class);
		SaaSectionD saaSectionD=mapper.map(saaModel, SaaSectionD.class);
		SaaSectionE saaSectionE=mapper.map(saaModel, SaaSectionE.class);
		SaaSectionF saaSectionF=mapper.map(saaModel, SaaSectionF.class);
		SaaSectionG saaSectionG=mapper.map(saaModel, SaaSectionG.class);
		SaaSectionH saaSectionH=mapper.map(saaModel, SaaSectionH.class);
		
		saaSectionA.setSaaId(saaDetails);
		saaSectionB.setSaaId(saaDetails);
		saaSectionC.setSaaId(saaDetails);
		saaSectionD.setSaaId(saaDetails);
		saaSectionE.setSaaId(saaDetails);
		saaSectionF.setSaaId(saaDetails);
		saaSectionG.setSaaId(saaDetails);
		saaSectionH.setSaaId(saaDetails);
		
		saaDetails.setSaaSectionA(saaSectionA);
		saaDetails.setSaaSectionB(saaSectionB);
		saaDetails.setSaaSectionC(saaSectionC);
		saaDetails.setSaaSectionD(saaSectionD);
		saaDetails.setSaaSectionE(saaSectionE);
		saaDetails.setSaaSectionF(saaSectionF);
		saaDetails.setSaaSectionG(saaSectionG);
		saaDetails.setSaaSectionH(saaSectionH);
		
		saaDetailsRepository.save(saaDetails);
		saaSectionARepository.save(saaSectionA);
		saaSectionBRepository.save(saaSectionB);
		saaSectionCRepository.save(saaSectionC);
		saaSectionDRepository.save(saaSectionD);
		saaSectionERepository.save(saaSectionE);
		saaSectionFRepository.save(saaSectionF);
		saaSectionGRepository.save(saaSectionG);
		saaSectionHRepository.save(saaSectionH);
		
		Set<SaaSectionCChildDeatails> saaSectionCChildDeatails = saaDetails.getSaaSectionCChildDeatails();
		List<Integer> remainingIdsI = new ArrayList<Integer>();
        for(SaaSectionCChildDeatails saaSectionCChildDeatail : saaSectionCChildDeatails){
        	saaSectionCChildDeatail.setSaaId(saaDetails);
        }
        saaSectionCChildDeatailsRepository.save(saaSectionCChildDeatails);
        for(SaaSectionCChildDeatails saaSectionCChildDeatail : saaSectionCChildDeatails){
            remainingIdsI.add(saaSectionCChildDeatail.getSaaSecCChildDeatailsId());
        }
        saaSectionCChildDeatailsRepository.deleteBySecCChildDeatailsId(remainingIdsI, saaDetails.getId());
        
        Set<SaaSectionJ> SaaSectionJs = saaDetails.getSaaSectionJ();
        List<Integer> remainingIdsJ = new ArrayList<Integer>();
        for(SaaSectionJ saaSectionJ : SaaSectionJs){
        	saaSectionJ.setSaaId(saaDetails);
        }
        saaSectionJRepository.save(SaaSectionJs);
        for(SaaSectionJ saaSectionJ : SaaSectionJs){
        	remainingIdsJ.add(saaSectionJ.getSaaSectionJId());
        }
        saaSectionJRepository.deleteBySectionJId(remainingIdsJ, saaDetails.getId());
        
		Set<SaaDetailsTraining> saaDetailsTrainings = saaDetails.getSaaDetailsTrainings();
        List<Integer> remainingIds = new ArrayList<Integer>();
        
        for(SaaDetailsTraining saaTraining : saaDetailsTrainings){
            saaTraining.setSaaId(saaDetails);
        }
        saaDetailsTrainingRepository.save(saaDetailsTrainings);
        for(SaaDetailsTraining saaTraining : saaDetailsTrainings){
            remainingIds.add(saaTraining.getTrainingId());
        }
        //the following method call will delete the records from training table which were deleted by user.
        saaDetailsTrainingRepository.deleteByTrainingId(remainingIds, saaDetails.getId());
		
	}
	
	@Override
	public SaaModel findLastSavedData(Integer userId) {
		SaaModel model = new SaaModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = saaDetailsRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(saaDetailsRepository.findMaxTimePeriod(userId));
			SaaDetails saaDetails = saaDetailsRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(saaDetails.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(saaDetails, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(saaDetails);
				}
			}else{//code for current month submitted form
				return getData(saaDetails);
			}
		}
	}
	
	private SaaModel getSubmittedData(SaaDetails lmSaaDetails, Timeperiod userMaxTimePeriod){
		SaaSectionF saaSectionF=null==lmSaaDetails?null:saaSectionFRepository.findBySaaSectionFId(lmSaaDetails.getSaaSectionF().getSaaSectionFId());
		SaaModel saaModel = new SaaModel();
		if(null != saaSectionF){
			saaModel.setB1_BoysZeroToTwo(saaSectionF.getF1_BoysZeroToTwo());
			saaModel.setB1_BoysTwoToFour(saaSectionF.getF1_BoysTwoToFour());
			saaModel.setB1_BoysFourToSix(saaSectionF.getF1_BoysFourToSix());
			saaModel.setB1_BoysGreaterThanSix(saaSectionF.getF1_BoysGreaterThanSix());
			saaModel.setB1_BoysTotal(saaSectionF.getF1_BoysTotal());
			saaModel.setB1_GirlsZeroToTwo(saaSectionF.getF1_GirlsZeroToTwo());
			saaModel.setB1_GirlsTwoToFour(saaSectionF.getF1_GirlsTwoToFour());
			saaModel.setB1_GirlsFourToSix(saaSectionF.getF1_GirlsFourToSix());
			saaModel.setB1_GirlsGreaterThanSix(saaSectionF.getF1_GirlsGreaterThanSix());
			saaModel.setB1_GirlsTotal(saaSectionF.getF1_GirlsTotal());
			saaModel.setB1_GrandTotal(saaSectionF.getF1_GrandTotal());
			saaModel.setB1_ABoysZeroToTwo(saaSectionF.getF2_BoysZeroToTwo());
			saaModel.setB1_ABoysTwoToFour(saaSectionF.getF2_BoysTwoToFour());
			saaModel.setB1_ABoysFourToSix(saaSectionF.getF2_BoysFourToSix());
			saaModel.setB1_ABoysGreaterThanSix(saaSectionF.getF2_BoysGreaterThanSix());
			saaModel.setB1_ABoysTotal(saaSectionF.getF2_BoysTotal());
			saaModel.setB1_AGirlsZeroToTwo(saaSectionF.getF2_GirlsZeroToTwo());
			saaModel.setB1_AGirlsTwoToFour(saaSectionF.getF2_GirlsTwoToFour());
			saaModel.setB1_AGirlsFourToSix(saaSectionF.getF2_GirlsFourToSix());
			saaModel.setB1_AGirlsGreaterThanSix(saaSectionF.getF2_GirlsGreaterThanSix());
			saaModel.setB1_AGirlsTotal(saaSectionF.getF2_GirlsTotal());
			saaModel.setB1_AGrandTotal(saaSectionF.getF2_GrandTotal());
			saaModel.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
			saaModel.setSubmitted(false);
		}
		return saaModel;
	}
	
	private SaaModel getData(SaaDetails saaDetails){
		SaaModel model=new SaaModel();
		SaaSectionA saaSectionA=null==saaDetails.getSaaSectionA()?null:saaSectionARepository.findBySaaSectionAId(saaDetails.getSaaSectionA().getSaaSectionAId());
        SaaSectionB saaSectionB=null==saaDetails.getSaaSectionB()?null:saaSectionBRepository.findBySaaSectionBId(saaDetails.getSaaSectionB().getSaaSectionBId());
        SaaSectionC saaSectionC=null==saaDetails.getSaaSectionC()?null:saaSectionCRepository.findBySaaSectionCId(saaDetails.getSaaSectionC().getSaaSectionCId());
        SaaSectionD saaSectionD=null==saaDetails.getSaaSectionD()?null:saaSectionDRepository.findBySaaSectionDId(saaDetails.getSaaSectionD().getSaaSectionDId());
        SaaSectionE saaSectionE=null==saaDetails.getSaaSectionE()?null:saaSectionERepository.findBySaaSectionEId(saaDetails.getSaaSectionE().getSaaSectionEId());
        SaaSectionF saaSectionF=null==saaDetails.getSaaSectionF()?null:saaSectionFRepository.findBySaaSectionFId(saaDetails.getSaaSectionF().getSaaSectionFId());
        SaaSectionG saaSectionG=null==saaDetails.getSaaSectionG()?null:saaSectionGRepository.findBySaaSectionGId(saaDetails.getSaaSectionG().getSaaSectionGId());
        SaaSectionH saaSectionH=null==saaDetails.getSaaSectionH()?null:saaSectionHRepository.findBySaaSectionHId(saaDetails.getSaaSectionH().getSaaSectionHId());
                           
        model = mapper.map(saaDetails,  SaaModel.class);
                    if(null != saaSectionA)mapper.map(saaSectionA, model);
                    if(null != saaSectionB)mapper.map(saaSectionB, model);
                    if(null != saaSectionC)mapper.map(saaSectionC, model);
                    if(null != saaSectionD)mapper.map(saaSectionD, model);
                    if(null != saaSectionE)mapper.map(saaSectionE, model);
                    if(null != saaSectionF)mapper.map(saaSectionF, model);
                    if(null != saaSectionG)mapper.map(saaSectionG, model);
                    if(null != saaSectionH)mapper.map(saaSectionH, model);
                    
        List<SaaDetailsTraining> saaTrainings=model.getSaaDetailsTrainings().stream().sorted((t1, t2) -> t1.getTrainingId().compareTo(t2.getTrainingId())).collect(Collectors.toList());                                
        for(SaaDetailsTraining saaTraining : model.getSaaDetailsTrainings()){
			saaTraining.setSaaId(null);
		}
        
        List<SaaSectionCChildDeatails> saaSectionCChildDeatails=model.getSaaSectionCChildDeatails().stream().sorted((i1, i2) -> i1.getSaaSecCChildDeatailsId().compareTo(i2.getSaaSecCChildDeatailsId())).collect(Collectors.toList());  
        for(SaaSectionCChildDeatails saaI : model.getSaaSectionCChildDeatails()){
        	saaI.setSaaId(null);
		}
        
        List<SaaSectionJ> saaSectionJs=model.getSaaSectionJ().stream().sorted((j1, j2) -> j1.getSaaSectionJId().compareTo(j2.getSaaSectionJId())).collect(Collectors.toList()); 
        for(SaaSectionJ saaJ : model.getSaaSectionJ()){
        	saaJ.setSaaId(null);
		}
        
        model.setSaaSectionCChildDeatailsList(saaSectionCChildDeatails);
        model.setSaaTrainings(saaTrainings);
        model.setSaaSectionJs(saaSectionJs);
        return model;
	}

//	public SaaModel findData(Integer userId) {
//
//		CPMISDate date = new CPMISDate();
//		Date firstDay = date.currentMonthFirstDate();
//		Date lastDay = date.currentMonthLastDate();
//		
//		SaaDetails saaDetails=saaDetailsRepository.findByUserIdAndLastSaveDateAfterAndLastSaveDateBefore(userId, firstDay, lastDay);
//		if(null != saaDetails){
//			SaaModel model=new SaaModel();
//			if(!saaDetails.isSubmitted() || (saaDetails.getDateOfSubmimission().after(firstDay) && saaDetails.getDateOfSubmimission().before(lastDay))){
//                if(null != saaDetails.getLastSaveDate() && saaDetails.getLastSaveDate().after(firstDay) && saaDetails.getLastSaveDate().before(lastDay)){
//                    SaaSectionA saaSectionA=null==saaDetails.getSaaSectionA()?null:saaSectionARepository.findBySaaSectionAId(saaDetails.getSaaSectionA().getSaaSectionAId());
//                    SaaSectionB saaSectionB=null==saaDetails.getSaaSectionB()?null:saaSectionBRepository.findBySaaSectionBId(saaDetails.getSaaSectionB().getSaaSectionBId());
//                    SaaSectionC saaSectionC=null==saaDetails.getSaaSectionC()?null:saaSectionCRepository.findBySaaSectionCId(saaDetails.getSaaSectionC().getSaaSectionCId());
//                    SaaSectionD saaSectionD=null==saaDetails.getSaaSectionD()?null:saaSectionDRepository.findBySaaSectionDId(saaDetails.getSaaSectionD().getSaaSectionDId());
//                    SaaSectionE saaSectionE=null==saaDetails.getSaaSectionE()?null:saaSectionERepository.findBySaaSectionEId(saaDetails.getSaaSectionE().getSaaSectionEId());
//                    SaaSectionF saaSectionF=null==saaDetails.getSaaSectionF()?null:saaSectionFRepository.findBySaaSectionFId(saaDetails.getSaaSectionF().getSaaSectionFId());
//                    SaaSectionG saaSectionG=null==saaDetails.getSaaSectionG()?null:saaSectionGRepository.findBySaaSectionGId(saaDetails.getSaaSectionG().getSaaSectionGId());
//                    SaaSectionH saaSectionH=null==saaDetails.getSaaSectionH()?null:saaSectionHRepository.findBySaaSectionHId(saaDetails.getSaaSectionH().getSaaSectionHId());
//                                       
//                    model = mapper.map(saaDetails,  SaaModel.class);
//                                if(null != saaSectionA)mapper.map(saaSectionA, model);
//                                if(null != saaSectionB)mapper.map(saaSectionB, model);
//                                if(null != saaSectionC)mapper.map(saaSectionC, model);
//                                if(null != saaSectionD)mapper.map(saaSectionD, model);
//                                if(null != saaSectionE)mapper.map(saaSectionE, model);
//                                if(null != saaSectionF)mapper.map(saaSectionF, model);
//                                if(null != saaSectionG)mapper.map(saaSectionG, model);
//                                if(null != saaSectionH)mapper.map(saaSectionH, model);
//                                
//                    List<SaaDetailsTraining> saaTrainings=model.getSaaDetailsTrainings().stream().sorted((t1, t2) -> t1.getTrainingId().compareTo(t2.getTrainingId())).collect(Collectors.toList());                                
//                    for(SaaDetailsTraining saaTraining : model.getSaaDetailsTrainings()){
//						saaTraining.setSaaId(null);
//					}
//                    
//                    List<SaaSectionCChildDeatails> saaSectionCChildDeatails=model.getSaaSectionCChildDeatails().stream().sorted((i1, i2) -> i1.getSaaSecCChildDeatailsId().compareTo(i2.getSaaSecCChildDeatailsId())).collect(Collectors.toList());  
//                    for(SaaSectionCChildDeatails saaI : model.getSaaSectionCChildDeatails()){
//                    	saaI.setSaaId(null);
//					}
//                    
//                    List<SaaSectionJ> saaSectionJs=model.getSaaSectionJ().stream().sorted((j1, j2) -> j1.getSaaSectionJId().compareTo(j2.getSaaSectionJId())).collect(Collectors.toList()); 
//                    for(SaaSectionJ saaJ : model.getSaaSectionJ()){
//                    	saaJ.setSaaId(null);
//					}
//                    
//                    model.setSaaSectionCChildDeatailsList(saaSectionCChildDeatails);
//                    model.setSaaTrainings(saaTrainings);
//                    model.setSaaSectionJs(saaSectionJs);
//                    return model;
//				}else
//					return null;
//			}
//			return model;
//		}
//		else{
//			CPMISDate preDate = new CPMISDate();
//			Date firstDateOfPreviousMonth = preDate.previousMonthFirstDate();
//			Date lastDateOfPreviousMonth = preDate.previousMonthLastDate();
//			
//			SaaDetails lmSaaDetails = saaDetailsRepository.findByUserIdAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(userId, firstDateOfPreviousMonth, lastDateOfPreviousMonth);
//			
//			SaaSectionF saaSectionF=null==lmSaaDetails?null:saaSectionFRepository.findBySaaSectionFId(lmSaaDetails.getSaaSectionF().getSaaSectionFId());
//			SaaModel saaModel = new SaaModel();
//			if(null != saaSectionF){
//				saaModel.setB1_BoysZeroToTwo(saaSectionF.getF1_BoysZeroToTwo());
//				saaModel.setB1_BoysTwoToFour(saaSectionF.getF1_BoysTwoToFour());
//				saaModel.setB1_BoysFourToSix(saaSectionF.getF1_BoysFourToSix());
//				saaModel.setB1_BoysGreaterThanSix(saaSectionF.getF1_BoysGreaterThanSix());
//				saaModel.setB1_BoysTotal(saaSectionF.getF1_BoysTotal());
//				saaModel.setB1_GirlsZeroToTwo(saaSectionF.getF1_GirlsZeroToTwo());
//				saaModel.setB1_GirlsTwoToFour(saaSectionF.getF1_GirlsTwoToFour());
//				saaModel.setB1_GirlsFourToSix(saaSectionF.getF1_GirlsFourToSix());
//				saaModel.setB1_GirlsGreaterThanSix(saaSectionF.getF1_GirlsGreaterThanSix());
//				saaModel.setB1_GirlsTotal(saaSectionF.getF1_GirlsTotal());
//				saaModel.setB1_GrandTotal(saaSectionF.getF1_GrandTotal());
//				saaModel.setB1_ABoysZeroToTwo(saaSectionF.getF2_BoysZeroToTwo());
//				saaModel.setB1_ABoysTwoToFour(saaSectionF.getF2_BoysTwoToFour());
//				saaModel.setB1_ABoysFourToSix(saaSectionF.getF2_BoysFourToSix());
//				saaModel.setB1_ABoysGreaterThanSix(saaSectionF.getF2_BoysGreaterThanSix());
//				saaModel.setB1_ABoysTotal(saaSectionF.getF2_BoysTotal());
//				saaModel.setB1_AGirlsZeroToTwo(saaSectionF.getF2_GirlsZeroToTwo());
//				saaModel.setB1_AGirlsTwoToFour(saaSectionF.getF2_GirlsTwoToFour());
//				saaModel.setB1_AGirlsFourToSix(saaSectionF.getF2_GirlsFourToSix());
//				saaModel.setB1_AGirlsGreaterThanSix(saaSectionF.getF2_GirlsGreaterThanSix());
//				saaModel.setB1_AGirlsTotal(saaSectionF.getF2_GirlsTotal());
//				saaModel.setB1_AGrandTotal(saaSectionF.getF2_GrandTotal());
//
//				saaModel.setSubmitted(false);
//			}
//			return saaModel;
//		}
//	}

	
}
