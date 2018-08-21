package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.sjpu.SjpuDetails;
import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionA;
import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionB;
import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionC;
import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionD;
import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionE;
import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionF;
import org.sdrc.cpmisweb.domain.sjpu.SjpuTraining;
import org.sdrc.cpmisweb.model.SjpuModel;
import org.sdrc.cpmisweb.repository.SJPUDetailsTrainingRepository;
import org.sdrc.cpmisweb.repository.SjpuDetailsRepository;
import org.sdrc.cpmisweb.repository.SjpuSectionARepository;
import org.sdrc.cpmisweb.repository.SjpuSectionBRepository;
import org.sdrc.cpmisweb.repository.SjpuSectionCRepository;
import org.sdrc.cpmisweb.repository.SjpuSectionDRepository;
import org.sdrc.cpmisweb.repository.SjpuSectionERepository;
import org.sdrc.cpmisweb.repository.SjpuSectionFRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:14:31 pm
 */
@Service
public class SjpuServiceImpl implements SjpuService {
	
	@Autowired
	SjpuDetailsRepository sjpuDetailsRepository;
	
	@Autowired
	SjpuSectionARepository sjpuSectionARepository;
	
	@Autowired
	SjpuSectionBRepository sjpuSectionBRepository;
	
	@Autowired
	SjpuSectionCRepository sjpuSectionCRepository;
	
	@Autowired
	SjpuSectionDRepository sjpuSectionDRepository;
	
	@Autowired
	SjpuSectionERepository sjpuSectionERepository;
	
	@Autowired
	SjpuSectionFRepository sjpuSectionFRepository;
	
	@Autowired
	SJPUDetailsTrainingRepository sjpuDetailsTrainingRepository;
	
	@Autowired
	DozerBeanMapper mapper;
	
	@Autowired
	TimePeriodRepository timePeriodRepository;
	
	@Override
	public void save(SjpuModel sjpuModel) {

		SjpuDetails sjpuDetails = mapper.map(sjpuModel, SjpuDetails.class);
		SjpuSectionA sjpuSectionA=mapper.map(sjpuModel, SjpuSectionA.class);
		SjpuSectionB sjpuSectionB=mapper.map(sjpuModel, SjpuSectionB.class);
		SjpuSectionC sjpuSectionC=mapper.map(sjpuModel, SjpuSectionC.class);
		SjpuSectionD sjpuSectionD=mapper.map(sjpuModel, SjpuSectionD.class);
		SjpuSectionE sjpuSectionE=mapper.map(sjpuModel, SjpuSectionE.class);
		SjpuSectionF sjpuSectionF=mapper.map(sjpuModel, SjpuSectionF.class);
		
		sjpuSectionA.setSjpuDetails(sjpuDetails);
		sjpuSectionB.setSjpuDetails(sjpuDetails);
		sjpuSectionC.setSjpuDetails(sjpuDetails);
		sjpuSectionD.setSjpuDetails(sjpuDetails);
		sjpuSectionE.setSjpuDetails(sjpuDetails);
		sjpuSectionF.setSjpuDetails(sjpuDetails);
		
		sjpuDetails.setSjpuSectionA(sjpuSectionA);
		sjpuDetails.setSjpuSectionB(sjpuSectionB);
		sjpuDetails.setSjpuSectionC(sjpuSectionC);
		sjpuDetails.setSjpuSectionD(sjpuSectionD);
		sjpuDetails.setSjpuSectionE(sjpuSectionE);
		sjpuDetails.setSjpuSectionF(sjpuSectionF);
		
		sjpuDetailsRepository.save(sjpuDetails);
		sjpuSectionARepository.save(sjpuSectionA);
		sjpuSectionBRepository.save(sjpuSectionB);
		sjpuSectionCRepository.save(sjpuSectionC);
		sjpuSectionDRepository.save(sjpuSectionD);
		sjpuSectionERepository.save(sjpuSectionE);
		sjpuSectionFRepository.save(sjpuSectionF);
		
		List<SjpuTraining> sjpuTrainings = sjpuDetails.getSjpuTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(SjpuTraining training : sjpuTrainings){
			training.setSjpuId(sjpuDetails);
		}
		sjpuDetailsTrainingRepository.save(sjpuTrainings);
		for(SjpuTraining sjpuTraining : sjpuTrainings){
			remainingIds.add(sjpuTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		sjpuDetailsTrainingRepository.deleteByTrainingId(remainingIds, sjpuDetails.getId());
	
	}
	
	@Override
	public SjpuModel findLastSavedData(Integer userId) {
		SjpuModel model = new SjpuModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = sjpuDetailsRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(sjpuDetailsRepository.findMaxTimePeriod(userId));
			SjpuDetails  sjpuDetails = sjpuDetailsRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(sjpuDetails.isSubmitted()){//if submitted(code for next time period data entry)
					model = new SjpuModel();
					model.setUserId(userId);
					model.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
					return model;
				}else{//if saved(show saved data)
					return getData(sjpuDetails);
				}
			}else{//code for current month submitted form
				return getData(sjpuDetails);
			}
		}
	}
	
	private SjpuModel getData(SjpuDetails sjpuDetails){
		SjpuModel model = new SjpuModel();
		SjpuSectionA sjpuSectionA = null == sjpuDetails.getSjpuSectionA()?null:sjpuSectionARepository.findBySjpuSectionAId(sjpuDetails.getSjpuSectionA().getSjpuSectionAId());
		SjpuSectionB sjpuSectionB = null == sjpuDetails.getSjpuSectionB()?null:sjpuSectionBRepository.findBySjpuSectionBId(sjpuDetails.getSjpuSectionB().getSjpuSectionBId());
		SjpuSectionC sjpuSectionC = null == sjpuDetails.getSjpuSectionC()?null:sjpuSectionCRepository.findBySjpuSectionCId(sjpuDetails.getSjpuSectionC().getSjpuSectionCId());
		SjpuSectionD sjpuSectionD = null == sjpuDetails.getSjpuSectionD()?null:sjpuSectionDRepository.findBySjpuSectionDId(sjpuDetails.getSjpuSectionD().getSjpuSectionDId());
		SjpuSectionE sjpuSectionE = null == sjpuDetails.getSjpuSectionE()?null:sjpuSectionERepository.findBySjpuSectionEId(sjpuDetails.getSjpuSectionE().getSjpuSectionEId());
		SjpuSectionF sjpuSectionF = null == sjpuDetails.getSjpuSectionF()?null:sjpuSectionFRepository.findBySjpuSectionFId(sjpuDetails.getSjpuSectionF().getSjpuSectionFId());
		
		model = mapper.map(sjpuDetails, SjpuModel.class);
		
		if(null != sjpuSectionA)mapper.map(sjpuSectionA, model);
		if(null != sjpuSectionB)mapper.map(sjpuSectionB, model);
		if(null != sjpuSectionC)mapper.map(sjpuSectionC, model);
		if(null != sjpuSectionD)mapper.map(sjpuSectionD, model);
		if(null != sjpuSectionE)mapper.map(sjpuSectionE, model);
		if(null != sjpuSectionF)mapper.map(sjpuSectionF, model);
		
		model.getSjpuTrainings().sort((st1, st2) -> st1.getTrainingId().compareTo(st2.getTrainingId()));				
		for(SjpuTraining st : model.getSjpuTrainings()){
			st.setSjpuId(null);
		}
		return model;
	}

}
