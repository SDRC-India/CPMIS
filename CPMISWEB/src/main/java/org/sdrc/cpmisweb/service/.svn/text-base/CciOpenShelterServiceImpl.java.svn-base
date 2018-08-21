package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.CciOpenShelter;
import org.sdrc.cpmisweb.domain.CciOpenShelterTraining;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.model.CciOpenShelterModel;
import org.sdrc.cpmisweb.repository.CciOpenShelterRepository;
import org.sdrc.cpmisweb.repository.CciOpenShelterTrainingDetailsRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
@Service
public class CciOpenShelterServiceImpl implements CciOpenShelterService {

	@Autowired
	CciOpenShelterRepository cciOpenShelterRepository;
	
	@Autowired
	CciOpenShelterTrainingDetailsRepository cciOpenShelterTrainingDetailsRepository;
	
	@Autowired
	DozerBeanMapper mapper;
	
	@Autowired
	TimePeriodRepository timePeriodRepository;
	
	@Override
	public void save(CciOpenShelterModel cciOpenShelterModel) {
		CciOpenShelter cciOpenShelter = mapper.map(cciOpenShelterModel, CciOpenShelter.class);
		CciOpenShelter openShelter = cciOpenShelterRepository.save(cciOpenShelter);
		
		List<CciOpenShelterTraining> cciOpenShelterTrainings = cciOpenShelter.getCciOpenShelterTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(CciOpenShelterTraining osTraining : cciOpenShelterTrainings){
			osTraining.setId(openShelter);
		}
		cciOpenShelterTrainingDetailsRepository.save(cciOpenShelterTrainings);
		for(CciOpenShelterTraining osTraining : cciOpenShelterTrainings){
			remainingIds.add(osTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		cciOpenShelterTrainingDetailsRepository.deleteByTrainingId(remainingIds, openShelter.getId());
	}

	private CciOpenShelterModel getSubmittedData(CciOpenShelter lmcciOpenShelter, Timeperiod userMaxTimePeriod){
		CciOpenShelterModel model = new CciOpenShelterModel();
		if(null != lmcciOpenShelter){
			model.setaYears0to6(lmcciOpenShelter.geteYears0to6());
			model.setaYears7to11(lmcciOpenShelter.geteYears7to11());
			model.setaYears12to15(lmcciOpenShelter.geteYears12to15());
			model.setaYears16to18(lmcciOpenShelter.geteYears16to18());
			model.setaYearsGreaterThan18(lmcciOpenShelter.geteYearsGreaterThan18());
			model.setaTotal(lmcciOpenShelter.geteTotal());
			model.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
			model.setSubmitted(false);
		}
		
		return model;
	}
	
	@Override
	public CciOpenShelterModel findLastSavedData(Integer userId) {
		
		CciOpenShelterModel model = new CciOpenShelterModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = cciOpenShelterRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(cciOpenShelterRepository.findMaxTimePeriod(userId));
			CciOpenShelter cciOpenShelter = cciOpenShelterRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(cciOpenShelter.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(cciOpenShelter, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(cciOpenShelter);
				}
			}else{//code for current month submitted form
				return getData(cciOpenShelter);
			}
		}
		
	}
	
	private CciOpenShelterModel getData(CciOpenShelter cciOpenShelter){
		CciOpenShelterModel model = new CciOpenShelterModel();
		model = mapper.map(cciOpenShelter, CciOpenShelterModel.class);
		model.getCciOpenShelterTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
		for(CciOpenShelterTraining osTraining : model.getCciOpenShelterTrainings()){
			osTraining.setId(null);
		}
		return model;
	}	
}